<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Players Table
        Schema::create('players', function (Blueprint $blueprint) {
            $blueprint->id(); // ESPN Player ID
            $blueprint->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            $blueprint->string('first_name');
            $blueprint->string('last_name');
            $blueprint->string('display_name');
            $blueprint->string('position')->nullable();
            $blueprint->string('jersey_number', 10)->nullable();
            $blueprint->string('headshot_url')->nullable();
            $blueprint->json('stats_summary')->nullable(); // Flexible storage for quick stats display
            $blueprint->timestamps();
        });

        // Coaches Table
        Schema::create('coaches', function (Blueprint $blueprint) {
            $blueprint->id(); // ESPN Coach ID
            $blueprint->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            $blueprint->string('first_name');
            $blueprint->string('last_name');
            $blueprint->string('display_name');
            $blueprint->boolean('is_head_coach')->default(true);
            $blueprint->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coaches');
        Schema::dropIfExists('players');
    }
};
