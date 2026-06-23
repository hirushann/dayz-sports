<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Allow mass assignment from the FetchNews command
    protected $guarded = [];

    // Cast the published_at column to a Carbon datetime instance
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}