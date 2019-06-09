<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('companies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->string('cnpj', 50)->unique();
            $table->text('desc')->nullable();
            $table->text('email')->nullable();
            $table->text('telefone')->nullable();
            $table->text('nome_fantasia')->nullable();
            $table->text('nome_juridica')->nullable();
            $table->string('url');
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('companies');
    }
}
