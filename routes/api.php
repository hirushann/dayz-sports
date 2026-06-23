<?php

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\GameResource;
use App\Http\Controllers\Api\SportsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/scores/{sport}/{league}', function ($sport, $league) {
    $games = Game::with(['homeTeam', 'awayTeam'])
        ->where('sport', $sport)
        ->where('league', $league)
        ->orderBy('start_time', 'asc')
        ->get();

    // GameResource::collection automatically handles formatting the arrays cleanly
    return GameResource::collection($games);
});

Route::prefix('v1/sports')->group(function () {
    // Scoreboard / Live Matches Route
    Route::get('/{sport}/{league}/scores', [SportsController::class, 'getScores']);
    
    // News Stream Route
    Route::get('/{sport}/{league}/news', [SportsController::class, 'getNews']);
    
    // Complete Team & Roster Profile Route
    Route::get('/{sport}/{league}/teams/{teamId}', [SportsController::class, 'getTeamRoster']);

    Route::get('/{sport}/{league}/teams/{teamId}/news', [SportsController::class, 'getTeamNews']);
});