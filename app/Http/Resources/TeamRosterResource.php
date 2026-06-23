<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamRosterResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'location'     => $this->location,
            'abbreviation' => $this->abcheviation,
            'logo'         => $this->logo_url,
            'sport'        => $this->sport,
            'league'       => $this->league,
            'coaching_staff' => CoachResource::collection($this->whenLoaded('coaches')),
            // Grouping players by position directly inside the API transformer
            'roster'       => PlayerResource::collection($this->whenLoaded('players')),
        ];
    }
}