<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('student',function(Blueprint $table)
        {
            
        	 
     $table->integer('id')->unsigned();
     $table->string('susername');
     $table->string('MarkAttendance');
     $table->string('ClassTeacher');
     $table->string('date');
     

            
          
             

            $table->foreign('id')
                  ->references('id')->on('details')
                  ->onDelete('cascade');

            
            
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
		Schema::table('student', function($table) {
		$table->dropForeign('details_id_foreign');
		$table->dropForeign('details_sname_foreign');
		});

		Schema::drop('student');
	}

}
