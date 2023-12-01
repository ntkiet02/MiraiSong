<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('typebeat_id')->constrained('typebeat');
            $table->foreignId('musician_id')->constrained('musician');
            $table->string('beatname');
            $table->string('beatname_slug');
            $table->integer('time');
            $table->text('file_path');
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('beat');
    }
};
