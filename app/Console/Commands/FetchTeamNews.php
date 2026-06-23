<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use App\Models\Article;
use Carbon\Carbon;

class FetchTeamNews extends Command
{
    protected $signature = 'sports:fetch-team-news {sport} {league}';
    protected $description = 'Fetch news articles specific to individual teams';

    public function handle()
    {
        $sport = $this->argument('sport');
        $league = $this->argument('league');

        $teams = Team::where('sport', $sport)->where('league', $league)->get();

        foreach ($teams as $team) {
            $url = "https://site.api.espn.com/apis/site/v2/sports/{$sport}/{$league}/teams/{$team->id}/news";
            $response = Http::get($url);

            if (!$response->successful()) continue;

            $articles = $response->json()['articles'] ?? [];

            foreach ($articles as $articleData) {
                if (!isset($articleData['headline']) || !isset($articleData['links']['web']['href'])) {
                    continue;
                }

                // 1. Create or Update the Article
                $article = Article::updateOrCreate(
                    ['url' => $articleData['links']['web']['href']],
                    [
                        'title'        => $articleData['headline'],
                        'description'  => $articleData['description'] ?? null,
                        'image_url'    => $articleData['images'][0]['url'] ?? null,
                        'sport'        => $sport,
                        'league'       => $league,
                        'published_at' => Carbon::parse($articleData['published']),
                    ]
                );

                // 2. Attach the Article to this specific Team (syncWithoutDetaching prevents duplicates)
                $article->teams()->syncWithoutDetaching([$team->id]);
            }
            
            $this->info("Synced news for team: {$team->name}");
            usleep(300000); // 0.3 sec sleep to be gentle on ESPN's servers
        }

        return Command::SUCCESS;
    }
}