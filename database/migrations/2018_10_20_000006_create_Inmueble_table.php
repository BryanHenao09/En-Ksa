<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Inmueble';

    /**
     * Run the migrations.
     * @table Inmueble
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idInmueble')->unsigned();
            $table->double('precio');
            $table->string('estado', 20);
            $table->integer('numBanos');
            $table->integer('numHabitaciones');
            $table->integer('numPisos');
            $table->double('metros2');
            $table->string('descripcion');
            $table->tinyInteger('permutable');
            $table->date('fechaPublicacion');
            $table->integer('antiguedad');
            $table->integer('users_cedula')->unsigned();
            $table->tinyInteger('parqueadero');
            $table->tinyInteger('ascensor');
            $table->tinyInteger('porteria');
            $table->double('metrosConstruidos');
            $table->double('metrosUtiles');
            $table->tinyInteger('garaje');
            $table->integer('tipoInmueble_id')->unsigned();
            $table->integer('Ciudad_idCiudad')->unsigned();
            $table->string('imagen', 255) ;
            $table->string('estadoPublicacion', 45);

            $table->index(["Ciudad_idCiudad"], 'fk_Inmueble_Ciudad_idx');

            $table->index(["tipoInmueble_id"], 'fk_Inmueble_tipoInmueble_idx');

            $table->index(["users_cedula"], 'fk_Inmueble_users_idx');

            $table->unique(["idInmueble"], 'idInmueble_UNIQUE');


            $table->foreign('users_cedula', 'fk_Inmueble_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tipoInmueble_id', 'fk_Inmueble_tipoInmueble_idx')
                ->references('id_Tipo_Inmueb')->on('tipoInmueble')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Ciudad_idCiudad', 'fk_Inmueble_Ciudad_idx')
                ->references('idCiudad')->on('Ciudad')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
