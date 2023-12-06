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
        Schema::create('artesaos', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('idade');
            $table->string('telefone');
            $table->date('dataRegisto');
            $table->timestamps();
            // $table->unsignedBigInteger('feiras_id')->references('id')->on('feiras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artesaos', function (Blueprint $table) {
            //
        });
    }
};
