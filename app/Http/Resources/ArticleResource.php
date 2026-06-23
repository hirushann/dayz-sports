<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'source_url' => $this->url,
            'image' => $this->image_url,
            'sport' => $this->sport,
            'league' => $this->league,
            'published_at' => $this->published_at->toIso8601String(),
        ];
    }
}