<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleHasPreferenciasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Inmueble_has_Preferencias';

    /**
     * Run the migrations.
     * @table Inmueble_has_Preferencias
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('inmueble_id')->unsigned();
            $table->integer('preferencias_id')->unsigned();

            $table->index(["preferencias_id"], 'fk_Inmueble_has_Preferencias_Preferencias_idx');

            $table->index(["inmueble_id"], 'fk_Inmueble_has_Preferencias_Inmueble_idx');


            $table->foreign('inmueble_id', 'fk_Inmueble_has_Preferencias_Inmueble_idx')
                ->references('idInmueble')->on('Inmueble')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('preferencias_id', 'fk_Inmueble_has_Preferencias_Preferencias_idx')
                ->references('idPreferencia')->on('Preferencias')
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
