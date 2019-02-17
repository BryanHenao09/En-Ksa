<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Ciudad';

    /**
     * Run the migrations.
     * @table Ciudad
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idCiudad')->unsigned();
            $table->string('nombre', 45);
            $table->integer('departamento_id')->unsigned();

            $table->index(["departamento_id"], 'fk_Ciudad_Departamento_idx');

            $table->unique(["idCiudad"], 'idCiudad_UNIQUE');


            $table->foreign('departamento_id', 'fk_Ciudad_Departamento_idx')
                ->references('idDepartamento')->on('Departamento')
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
