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
            $table->timestamps();
            $table->string('Nome',100);
            $table->string('idade');
            $table->string('telefone');
            $table->date('dataRegisto');
            $table->string('image')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artesaos');
    }
};
