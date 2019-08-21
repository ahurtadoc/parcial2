<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa')->unique();
            $table->timestamps();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('duenno_id');

            $table->foreign('marca_id')
                ->references('id')
                ->on('marcas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('duenno_id')
                ->references('id')
                ->on('duennos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

        App\Vehiculo::create([
            'placa'=>'ahc-718',
            'marca_id' => 1,
            'duenno_id' => 1
        ]);
        App\Vehiculo::create([
            'placa'=>'leh-991',
            'marca_id' => 2,
            'duenno_id' => 2
        ]);

        App\Vehiculo::create([
            'placa'=>'sas-531',
            'marca_id' => 2,
            'duenno_id' => 3
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
