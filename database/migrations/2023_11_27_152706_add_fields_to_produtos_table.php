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
<<<<<<< HEAD
        Schema::table('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('imagem')->nullable;
            $table->unsignedBigInteger('artesaos_id')->references('id')->on('artesaos');
=======
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('imagem');
            // $table->unsignedBigInteger('artesaos_id')->references('id')->on('artesaos');
>>>>>>> fb97ecdc943edcba80ee6fe87e8c327aa05e6316
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            //
        });
    }
};
