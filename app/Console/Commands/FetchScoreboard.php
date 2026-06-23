<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use App\Models\Game;
use Carbon\Carbon;

class FetchScoreboard extends Command
{
    protected $signature = 'sports:fetch-scoreboard {sport} {league}';
    protected $description = 'Fetch live scores and games from ESPN endpoints';

    public function handle()
    {
        $sport = $this->argument('sport');
        $league = $this->argument('league');
        
        $url = "https://site.api.espn.com/apis/site/v2/sports/{$sport}/{$league}/scoreboard";
        
        $this->info("Fetching data for {$league}...");
        $response = Http::get($url);

        if (!$response->successful()) {
            $this->error("Failed to collect data from ESPN.");
            return Command::FAILURE;
        }

        $data = $response->json();
        $events = $data['events'] ?? [];

        foreach ($events as $event) {
            $competitions = $event['competitions'][0] ?? null;
            if (!$competitions) continue;

            $competitors = $competitions['competitors'] ?? [];
            
            $home = collect($competitors)->firstWhere('homeAway', 'home');
            $away = collect($competitors)->firstWhere('homeAway', 'away');

            if (!$home || !$away) continue;

            // 1. Sync Teams Safely
            foreach ([$home, $away] as $teamData) {
                Team::updateOrCreate(
                    ['id' => $teamData['team']['id']],
                    [
                        'sport' => $sport,
                        'league' => $league,
                        'name' => $teamData['team']['displayName'],
                        'location' => $teamData['team']['location'] ?? '',
                        'abcheviation' => $teamData['team']['abcheviation'] ?? null,
                        'logo_url' => $teamData['team']['logo'] ?? null,
                    ]
                );
            }

            // 2. Sync Game details
            Game::updateOrCreate(
                ['id' => $event['id']],
                [
                    'sport' => $sport,
                    'league' => $league,
                    'start_time' => Carbon::parse($event['date']),
                    'status' => $event['status']['type']['state'], // 'pre', 'in', or 'post'
                    'display_clock' => $event['status']['displayClock'] ?? null,
                    'period' => $event['status']['period'] ?? 0,
                    'home_team_id' => $home['team']['id'],
                    'away_team_id' => $away['team']['id'],
                    'home_score' => (int) $home['score'],
                    'away_score' => (int) $away['score'],
                    'raw_data' => $event
                ]
            );
        }

        $this->info("Successfully processed " . count($events) . " games.");
        return Command::SUCCESS;
    }
}