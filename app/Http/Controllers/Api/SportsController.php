<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Team;
use App\Models\Article;
use App\Http\Resources\GameResource;
use App\Http\Resources\TeamRosterResource;
use App\Http\Resources\ArticleResource;
use Illuminate\Support\Facades\Cache;

class SportsController extends Controller
{
    /**
     * Get live and scheduled scores for a specific league.
     * Cached heavily for 15 seconds during live windows.
     */
    public function getScores(string $sport, string $league)
    {
        $cacheKey = "scores_{$sport}_{$league}";

        $games = Cache::remember($cacheKey, now()->addSeconds(15), function () use ($sport, $league) {
            return Game::with(['homeTeam', 'awayTeam'])
                ->where('sport', $sport)
                ->where('league', $league)
                ->orderBy('start_time', 'asc')
                ->get();
        });

        return GameResource::collection($games);
    }

    /**
     * Get a specific team's full profile and roster.
     * Cached for 1 hour since roster files rarely alter midday.
     */
    public function getTeamRoster(string $sport, string $league, int $teamId)
    {
        $cacheKey = "roster_team_{$teamId}";

        $team = Cache::remember($cacheKey, now()->addHour(), function () use ($teamId) {
            return Team::with(['players', 'coaches'])->findOrFail($teamId);
        });

        return new TeamRosterResource($team);
    }

    /**
     * Get the recent news feed for a sport/league.
     * Cached for 5 minutes.
     */
    public function getNews(string $sport, string $league)
    {
        $cacheKey = "news_{$sport}_{$league}";

        $articles = Cache::remember($cacheKey, now()->addMinutes(5), function () use ($sport, $league) {
            return Article::where('sport', $sport)
                ->where('league', $league)
                ->orderBy('published_at', 'desc')
                ->take(20)
                ->get();
        });

        return ArticleResource::collection($articles);
    }

    /**
     * Get recent news for a SPECIFIC team.
     * Cached for 15 minutes.
     */
    public function getTeamNews(string $sport, string $league, string $teamId)
    {
        $cacheKey = "news_team_{$teamId}";

        $articles = Cache::remember($cacheKey, now()->addMinutes(15), function () use ($teamId) {
            $team = Team::findOrFail($teamId);
            
            return $team->articles()
                ->orderBy('published_at', 'desc')
                ->take(15)
                ->get();
        });

        // We can reuse the existing ArticleResource!
        return ArticleResource::collection($articles);
    }
}