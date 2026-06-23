<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Teams Table
        Schema::create('teams', function (Blueprint $blueprint) {
            $blueprint->id(); // Use ESPN's external ID as primary key
            $blueprint->string('sport'); // e.g., 'basketball', 'football'
            $blueprint->string('league'); // e.g., 'nba', 'nfl', 'college-football'
            $blueprint->string('name');
            $blueprint->string('location');
            $blueprint->string('abcheviation', 10)->nullable();
            $blueprint->string('logo_url')->nullable();
            $blueprint->timestamps();
        });

        // Games / Events Table
        Schema::create('games', function (Blueprint $blueprint) {
            $blueprint->id(); // ESPN event ID
            $blueprint->string('sport');
            $blueprint->string('league');
            $blueprint->dateTime('start_time');
            $blueprint->string('status'); // 'pre', 'in', 'post'
            $blueprint->string('display_clock')->nullable();
            $blueprint->integer('period')->default(0);
            
            // Teams
            $blueprint->foreignId('home_team_id')->constrained('teams');
            $blueprint->foreignId('away_team_id')->constrained('teams');
            
            // Live Scores
            $blueprint->integer('home_score')->default(0);
            $blueprint->integer('away_score')->default(0);
            
            $blueprint->json('raw_data')->nullable(); // For edge-case data safety
            $blueprint->timestamps();
            
            $blueprint->index(['sport', 'league', 'status']);
        });

        // News Table
        Schema::create('articles', function (Blueprint $blueprint) {
            $blueprint->id(); // ESPN story ID if available, or auto-increment
            $blueprint->string('title');
            $blueprint->text('description')->nullable();
            $blueprint->string('url')->unique();
            $blueprint->string('image_url')->nullable();
            $blueprint->string('sport')->nullable();
            $blueprint->string('league')->nullable();
            $blueprint->dateTime('published_at');
            $blueprint->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('games');
        Schema::dropIfExists('teams');
    }
};