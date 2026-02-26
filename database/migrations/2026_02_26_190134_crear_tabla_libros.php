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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('isbn', 100);
            $table->integer('estatus');
            $table->string('autor', 250);
            $table->string('editorial', 250);
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            // Llave foránea (opcional, si ya tienes tabla categorías)
            // $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
