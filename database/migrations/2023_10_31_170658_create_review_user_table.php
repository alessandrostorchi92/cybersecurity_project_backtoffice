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
        Schema::create('review_user', function (Blueprint $table) {
            $table->unsignedBigInteger('review_id');

            $table->foreign('review_id')
            ->references('id')
            ->on('reviews')
            ->onDelete('cascade'); 
            
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->tinyInteger('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_user');
    }
};
