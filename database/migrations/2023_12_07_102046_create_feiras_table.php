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
        Schema::create('feiras', function (Blueprint $table) {
            $table->id();
            $table->string('feiraNome');
            $table->text('feiraDescricao');
            $table->string('feiraImagemURL')->nullable();
            $table->text('feiraLocalizacao');
            $table->date('feiraDataInicio');
            $table->date('feiraDataFim');
            $table->integer('feiraPreco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feiras');
    }
};
