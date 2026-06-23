<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // We are using ESPN's external ID, so disable auto-incrementing
    public $incrementing = false;
    protected $keyType = 'string'; // Or 'int' depending on how you structured the migration, usually ESPN IDs are safely treated as strings or bigints

    // Allow mass assignment from our ingestion engine
    protected $guarded = [];

    // Cast the JSON stats summary back to a native PHP array
    protected $casts = [
        'stats_summary' => 'array',
    ];

    /**
     * Get the team that owns the player.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}