<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    // Disable auto-incrementing for ESPN IDs
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];

    // Ensure the boolean flag casts correctly
    protected $casts = [
        'is_head_coach' => 'boolean',
    ];

    /**
     * Get the team that employs the coach.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}