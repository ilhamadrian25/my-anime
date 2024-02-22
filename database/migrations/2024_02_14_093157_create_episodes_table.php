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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anime_id');
            $table->unsignedBigInteger('type_url_id');
            $table->string('episode');
            $table->string('watch');
            $table->string('tanggal');
            $table->timestamps();

            $table->foreign('anime_id')->references('id')->on('animes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type_url_id')->references('id')->on('type_urls')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
