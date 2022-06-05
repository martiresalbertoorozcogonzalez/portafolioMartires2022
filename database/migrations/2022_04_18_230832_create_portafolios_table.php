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
       
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });
        

        Schema::create('portafolios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagen_portafolio');
            $table->text('descripcion');

            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la pagina');
            $table->foreignId('categoria_id')->index('id')->on('categorias')->comment('La categoria de la pagina creada');

            
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
        Schema::dropIfExists('portafolios');
        Schema::dropIfExists('categorias');
    }
};
