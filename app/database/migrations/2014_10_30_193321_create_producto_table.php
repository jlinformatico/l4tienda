<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('producto', function($table){
       $table->create();
		//definimos los campos
       $table->increments('id'); //tipo de datos autoincrementable llamado id
       $table->integer('vendedor_id')->unsigned(); 
       $table->foreign('vendedor_id')->references('id')->on('vendedor');
       $table->string('descripcion');
       $table->float('precio');
       $table->timestamps();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('producto');
	}

}
