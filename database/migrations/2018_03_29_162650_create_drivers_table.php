<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{

    public function up()
    {
        Schema::create('drivers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('cnh');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('sexo')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('perfil')->nullable();
            $table->string('password');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
                ->references('id')
                ->on('companies');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('drivers');
    }
}
