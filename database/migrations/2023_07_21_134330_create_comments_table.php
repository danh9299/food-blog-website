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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->text('text');
            $table->dateTime('date_commented');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('author_id')->references('author_id')->on('authors');
            $table->foreign('post_id')->references('post_id')->on('posts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
