<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorTable extends Migration {

	//el metodo up sirve para indicar que queremos realizar una migración
	public function up()
	{
		
		Schema::create('vendedor', function($table)
		{
	       $table->increments('id'); //tipo de dato autoincrementable llamado id
	       $table->string('nombre');
	       $table->string('apellido');
	       $table->timestamps();
		});
	}

	// el método down es para indicar que queremos revertir la migración
	public function down()
	{
		//
		Schema::drop('vendedor');
	}

}
