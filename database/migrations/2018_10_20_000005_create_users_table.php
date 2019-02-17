<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned()->nullable();
            $table->string('nombre', 45);
            $table->string('apellidos', 45);
            $table->string('email', 80);
            $table->integer('telefono')->nullable();
            $table->string('contrasena', 50);
            $table->integer('ciudad_id')->unsigned();
            $table->integer('Usuario_idUsuario')->unsigned();
            $table->string('nombreUsuario')->nullable();
            $table->date('fechaNacimiento');
            $table->rememberToken();
            $table->timestamps();

            $table->index(["ciudad_id"], 'fk_users_Ciudad_idx');

            $table->index(["Usuario_idUsuario"], 'fk_users_Usuario_idx');

            $table->unique(["telefono"], 'telefono_UNIQUE');

            $table->unique(["email"], 'email_UNIQUE');

            $table->unique(["nombreUsuario"], 'nombreUsuario_UNIQUE');


            $table->foreign('ciudad_id', 'fk_users_Ciudad_idx')
                ->references('idCiudad')->on('Ciudad')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Usuario_idUsuario', 'fk_users_Usuario_idx')
                ->references('idUsuario')->on('Usuario')
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
        Schema::dropIfExists('users');
    }
}
