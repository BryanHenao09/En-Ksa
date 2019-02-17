<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenciasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Preferencias';

    /**
     * Run the migrations.
     * @table Preferencias
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyInteger('transportePublico');
            $table->tinyInteger('cocinaIntegral');
            $table->tinyInteger('closet');
            $table->tinyInteger('supermercado');
            $table->tinyInteger('centroComercial');
            $table->tinyInteger('gimnasio');
            $table->tinyInteger('parques');
            $table->tinyInteger('zonasVerdes');
            $table->tinyInteger('gasDomiciliario');
            $table->tinyInteger('vigilancia');
            $table->tinyInteger('balcon');
            $table->increments('idPreferencia');

            $table->unique(["idPreferencia"], 'idPreferencia_UNIQUE');
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
