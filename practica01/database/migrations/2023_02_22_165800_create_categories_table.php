<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        //podria ser bigIncrement o simplemente id() ya que ambos son autoincrementales
        $table->bigIncrements('id');
        $table->string('name');
        //timestamps crea dos tablas.La columna created_at se llena automáticamente con la fecha y hora en que se creó un registro en la tabla. La columna updated_at se actualiza automáticamente con la fecha y hora en que se modificó el registro más reciente de la tabla.
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
        Schema::dropIfExists('categories');
    }
};
