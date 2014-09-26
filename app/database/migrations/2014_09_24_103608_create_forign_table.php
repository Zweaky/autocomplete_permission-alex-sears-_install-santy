<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForignTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		

  //     Schema::create('student', function($table) {
  //    $table->string('student_name');
  //    $table->integer('student_id')->length(10)->unsigned();
  //    $table->string('student_class');
  //    $table->string('student_father_name');
  // });

  // Schema::create('teacher', function($table) {
  //    $table->string('teacher_name');
  //    $table->integer('teacher_id')->length(10)->unsigned();
  //    $table->string('teacher_department');
  //    $table->string('teacher_designation');
  //  });
  //     Schema::create('internal', function($table) {
  //    $table->string('student_name');
  //    $table->integer('student_id')->length(10)->unsigned();
  //    $table->string('student_class');
  //    $table->string('sub_maths');
  //    $table->string('sub_english');
  //    $table->string('sub_arabic');
  //    $table->string('sub_hindi');
  // });

   Schema::create('student',function(Blueprint $table)
        {
            
        	 $table->string('student_name');
     $table->integer('id')->unsigned();
     $table->string('susername');
     $table->string('MarkAttendance');
     $table->string('ClassTeacher');
     $table->string('date');
     

           
          
             

            $table->foreign('id')
                  ->references('id')->on('details')
                  ->onDelete('cascade');

            
            
        });

 
 //  Schema::table('internal', function($table) {
 //     $table->foreign('student_id')->references('student_id')->on('student')->onDelete('cascade');

	
	// });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		//Schema::drop('student');

		Schema::table('student', function($table) {
		$table->dropForeign('details_student_id_foreign');
		});

		Schema::drop('student');
		
	}

}
