<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		
		Schema::create('details', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('sname');
            $table->string('sfathername');
            $table->string('sclass');
             $table->string('ssex');
              $table->string('language');
            
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('details');
	}

}
