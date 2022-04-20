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
            $table->string('git');
            $table->string('linkedin');
            $table->text('descripcion');
            $table->boolean('activa')->default(true);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
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
