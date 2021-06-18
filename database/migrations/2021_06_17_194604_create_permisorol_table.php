<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisorolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisorol', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('rol_id');
            $table->foreign('rol_id', 'fk_permisorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedbigInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisorol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permisorol');
    }
}
