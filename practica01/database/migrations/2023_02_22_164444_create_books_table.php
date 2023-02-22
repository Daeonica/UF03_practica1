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
    //migracion de book
    Schema::create('books', function (Blueprint $table) {
        //podria ser bigIncrement o simplemente id() ya que ambos son autoincrementales
        $table->bigIncrements('id');
        $table->string('isbn')->unique();
        $table->string('title');
        $table->string('author');
        //timestamps crea dosgit pus tablas.La columna created_at se llena automáticamente con la fecha y hora en que se creó un registro en la tabla. La columna updated_at se actualiza automáticamente con la fecha y hora en que se modificó el registro más reciente de la tabla.
        $table->timestamps();
        $table->text('description');
        $table->decimal('price');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
