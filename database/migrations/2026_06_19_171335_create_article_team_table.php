<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Team;
use App\Models\Article;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('article_team', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->foreignIdFor(Article::class);
            // Team ID is a string/external ID based on our previous setup
            // $blueprint->string('team_id');
            $blueprint->foreignIdFor(Team::class);
            $blueprint->timestamps();
            
            // Prevent duplicate attachments
            $blueprint->unique(['article_id', 'team_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_team');
    }
};