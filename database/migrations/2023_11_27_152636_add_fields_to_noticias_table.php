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
        Schema::table('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('imagem')->nullable;
            $table->string('Titulo',100);
            $table->text('descricao');
            $table->date('data');
            $table->timestamps();
            $table->unsignedBigInteger('feiras_id')->references('id')->on('feiras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('noticias', function (Blueprint $table) {
            //
        });
    }
};