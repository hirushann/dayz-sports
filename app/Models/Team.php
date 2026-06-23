<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function homeGames()
    {
        return $this->hasMany(Game::class, 'home_team_id');
    }
    public function awayGames()
    {
        return $this->hasMany(Game::class, 'away_team_id');
    }

    // Add these two:
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
