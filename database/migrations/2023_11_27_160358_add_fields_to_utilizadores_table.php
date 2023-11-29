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
        Schema::table('utilizadores', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('imagem')->nullable;
=======
            $table->string('imagem');
>>>>>>> fb97ecdc943edcba80ee6fe87e8c327aa05e6316
            $table->string('telefone')->unique();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('utilizadores', function (Blueprint $table) {
            //
        });
    }
};
