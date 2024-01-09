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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rapper_id')->constrained('rapper');
            $table->foreignId('beat_id')->constrained('beat');
            $table->text('noidungbinhluan');
            $table->unsignedTinyInteger('kiemduyet')->default(0);
            $table->unsignedTinyInteger('kichhoat')->default(1);
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
