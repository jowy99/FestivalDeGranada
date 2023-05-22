<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amigos', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('n_amigo')->nullable();

            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('categoria')->nullable();
            $table->string('cargo')->nullable();
            $table->string('dni')->nullable();

            $table->float('cantidad')->nullable();
            $table->string('concepto')->nullable();
            $table->string('iban')->nullable();

            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cp')->nullable();
            $table->string('provincia')->nullable();

            $table->boolean('visualizar_nombre')->default(0)->nullable();



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
