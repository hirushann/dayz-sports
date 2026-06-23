<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('sports:fetch-scoreboard basketball nba')->everyFiveSeconds();
Schedule::command('sports:fetch-scoreboard football nfl')->everyFiveSeconds();
Schedule::command('sports:fetch-scoreboard football college-football')->everyFiveSeconds();

// Fetch sports news articles every hour (Write a corresponding sports:fetch-news command)
Schedule::command('sports:fetch-news')->hourly();

Schedule::command('sports:fetch-news basketball nba')->everyThirtyMinutes();
Schedule::command('sports:fetch-news football nfl')->everyThirtyMinutes();

// Run Roster processing daily during off-peak night hours
Schedule::command('sports:fetch-rosters basketball nba')->dailyAt('02:00');
Schedule::command('sports:fetch-rosters football nfl')->dailyAt('03:00');

Schedule::command('sports:fetch-team-news basketball nba')->everyTwoHours();