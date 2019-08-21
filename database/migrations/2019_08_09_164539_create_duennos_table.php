<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuennosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duennos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('cedula')->unique();
            $table->timestamps();
        });

        App\Duenno::create([
            'nombre' => 'Alex',
            'cedula' => 123444
        ]);

        App\Duenno::create([
            'nombre' => 'Juan',
            'cedula' => 33123
        ]);

        App\Duenno::create([
            'nombre' => 'Felipe',
            'cedula' => 55525
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duennos');
    }
}
