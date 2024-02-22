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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_jepang');
            $table->string('nama_inggris');
            $table->unsignedBigInteger('season')->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->unsignedBigInteger('studio')->nullable();
            $table->string('tanggal');
            $table->unsignedBigInteger('status')->nullable();
            $table->unsignedBigInteger('country')->nullable();
            $table->unsignedBigInteger('musim')->nullable();
            $table->string('durasi');
            $table->longText('sinopsis')->nullable();
            $table->timestamps();

            $table->foreign('season')->references('id')->on('seasons')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type')->references('id')->on('types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('studio')->references('id')->on('studios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('musim')->references('id')->on('musims')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
