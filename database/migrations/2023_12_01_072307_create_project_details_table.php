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
        Schema::create('projectdetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('project');
            $table->foreignId('beat_id')->constrained('beat'); 
           
            $table->text('lyric');
            $table->text('recording');     
            $table->string('image_project')->nullable();
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectdetail');
    }
};
