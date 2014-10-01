<?php

class Teacher extends Eloquent {
     
     protected $table = 'student';
	 protected $fillable = array('id', 'susername','MarkAttendance','ClassTeacher','date');
       public $timestamps = false;
  public function getdetails()
  {
  	   $bookdetailss =Teacher::all();
  	    
  }  
}