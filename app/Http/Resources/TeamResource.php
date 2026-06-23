<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'abbreviation' => $this->abcheviation, // Normalizing typo from DB if necessary
            'logo' => $this->logo_url,
            'sport' => $this->sport,
            'league' => $this->league,
        ];
    }
}