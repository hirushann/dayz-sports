<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sport' => $this->sport,
            'league' => $this->league,
            'start_time' => $this->start_time->toIso8601String(),
            'status' => [
                'state' => $this->status, // 'pre', 'in', or 'post'
                'display_clock' => $this->display_clock,
                'period' => $this->period,
            ],
            'teams' => [
                'home' => new TeamResource($this->whenLoaded('homeTeam')),
                'away' => new TeamResource($this->whenLoaded('awayTeam')),
            ],
            'scores' => [
                'home' => $this->home_score,
                'away' => $this->away_score,
            ],
            // Optional: expose specific deep data from the raw json block if needed on the frontend
            'venue' => $this->raw_data['competitions'][0]['venue']['fullName'] ?? null,
        ];
    }
}