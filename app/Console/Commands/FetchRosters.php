<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use App\Models\Player;
use App\Models\Coach;

class FetchRosters extends Command
{
    protected $signature = 'sports:fetch-rosters {sport} {league}';
    protected $description = 'Fetch players and coaches for all saved teams in a league';

    public function handle()
    {
        $sport = $this->argument('sport');
        $league = $this->argument('league');

        // Grab teams we already have in our database for this specific league
        $teams = Team::where('sport', $sport)->where('league', $league)->get();

        if ($teams->isEmpty()) {
            $this->warn("No teams found in DB for {$sport}/{$league}. Run scoreboard fetcher first.");
            return Command::FAILURE;
        }

        foreach ($teams as $team) {
            $url = "https://site.api.espn.com/apis/site/v2/sports/{$sport}/{$league}/teams/{$team->id}/roster";
            $response = Http::get($url);

            if (!$response->successful()) {
                $this->error("Failed to fetch roster for Team ID: {$team->id}");
                continue;
            }

            $data = $response->json();

            // 1. Process Coaches
            $coachData = $data['coach'] ?? [];
            foreach ($coachData as $coach) {
                Coach::updateOrCreate(
                    ['id' => $coach['id']],
                    [
                        'team_id'      => $team->id,
                        'first_name'   => $coach['firstName'] ?? '',
                        'last_name'    => $coach['lastName'] ?? '',
                        'display_name' => $coach['getDisplayName'] ?? ($coach['firstName'] . ' ' . $coach['lastName']),
                        'is_head_coach'=> true
                    ]
                );
            }

            // 2. Process Players (Grouped by position groups in ESPN's response)
            $positionGroups = $data['athletes'] ?? [];
            foreach ($positionGroups as $group) {
                $athletes = $group['items'] ?? [];
                foreach ($athletes as $athlete) {
                    Player::updateOrCreate(
                        ['id' => $athlete['id']],
                        [
                            'team_id'       => $team->id,
                            'first_name'    => $athlete['firstName'] ?? '',
                            'last_name'     => $athlete['lastName'] ?? '',
                            'display_name'  => $athlete['displayName'] ?? '',
                            'position'      => $athlete['position']['displayName'] ?? null,
                            'jersey_number' => $athlete['jersey'] ?? null,
                            'headshot_url'  => $athlete['headshot']['href'] ?? null,
                            'stats_summary' => $athlete['statsSummary'] ?? null,
                        ]
                    );
                }
            }
            
            $this->info("Synced roster for team: {$team->name}");
            usleep(500000); // 0.5 sec sleep to avoid aggressive hitting
        }

        return Command::SUCCESS;
    }
}