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
        Schema::create('lecciones', function (Blueprint $table) {
            $table->id('lec_id');
            $table->foreignId('cur_id')->constrained('cursos', 'cur_id'); // Indica la columna 'cur_id' como clave externa
            $table->string('lec_titulo');
            $table->string('lec_descripcion');
            $table->string('lec_video');
            $table->integer('lec_duracion');
            $table->unsignedInteger('lec_estado')->default(1);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecciones');
    }
};
