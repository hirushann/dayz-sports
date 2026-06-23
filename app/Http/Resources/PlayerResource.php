<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
            'name'          => $this->display_name,
            'position'      => $this->position,
            'jersey_number' => $this->jersey_number,
            'headshot'      => $this->headshot_url,
            'stats'         => $this->stats_summary, // Pass through the flexible JSON summary object
        ];
    }
}