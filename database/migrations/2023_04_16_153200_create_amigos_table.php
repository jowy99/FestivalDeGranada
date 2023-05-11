<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amigos', function (Blueprint $table) {
            $table->id('ID')->unique();
            $table->string('N_AMIGO')->nullable();

            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDOS')->nullable();
            $table->string('CATEGORIA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('DNI')->nullable();

            $table->float('CANTIDAD')->nullable();
            $table->string('CONCEPTO')->nullable();
            $table->string('IBAN')->nullable();

            $table->string('EMAIL')->nullable();
            $table->string('TELEFONO')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->string('CP')->nullable();
            $table->string('PROVINCIA')->nullable();

            $table->boolean('VISUALIZAR_NOMBRE')->default(0)->nullable();



            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amigos');
    }
};
