<?php

class Book extends Eloquent {
     
     protected $table = 'details';
	 protected $fillable = array('id', 'sname','sfathername','sclass','ssex','language');

 public  $timestamps = false;
}
 