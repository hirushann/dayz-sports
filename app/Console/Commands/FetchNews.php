<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Article;
use Carbon\Carbon;

class FetchNews extends Command
{
    protected $signature = 'sports:fetch-news {sport} {league}';
    protected $description = 'Fetch recent sports articles from ESPN';

    public function handle()
    {
        $sport = $this->argument('sport');
        $league = $this->argument('league');

        $url = "https://site.api.espn.com/apis/site/v2/sports/{$sport}/{$league}/news";
        $response = Http::get($url);

        if (!$response->successful()) {
            $this->error("Could not pull news items.");
            return Command::FAILURE;
        }

        $data = $response->json();
        $articles = $data['articles'] ?? [];

        foreach ($articles as $article) {
            // Filter out video-only or invalid objects missing key parameters
            if (!isset($article['headline']) || !isset($article['links']['web']['href'])) {
                continue;
            }

            Article::updateOrCreate(
                ['url' => $article['links']['web']['href']],
                [
                    'title'        => $article['headline'],
                    'description'  => $article['description'] ?? null,
                    'image_url'    => $article['images'][0]['url'] ?? null,
                    'sport'        => $sport,
                    'league'       => $league,
                    'published_at' => Carbon::parse($article['published']),
                ]
            );
        }

        $this->info("Synced news articles for {$league}.");
        return Command::SUCCESS;
    }
}