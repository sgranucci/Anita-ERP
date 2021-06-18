<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroprestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroprestamo', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('usuario_id');
            $table->foreign('usuario_id', 'fx_libroprestamo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedbigInteger('libro_id');
            $table->foreign('libro_id', 'fx_libroprestamo_libro')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a', 100);
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroprestamo');
    }
}
