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
        Schema::create('table_beneficiario', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('codigo');
            $table->char('cgc', 18);
            $table->string('nome');
            $table->char('tipo', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_beneficiario');
    }
};
