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
        Schema::create('serie_tag', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serie_tag');
    }
};
