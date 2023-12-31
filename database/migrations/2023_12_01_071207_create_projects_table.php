<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rapper_id')->constrained('rapper');
            $table->foreignId('status_id')->constrained('status');
            $table->foreignId('beat_id')->constrained('beat');
            $table->string('projectname');
            $table->string('projectname_slug');
            $table->text('lyric')->nullable();
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
