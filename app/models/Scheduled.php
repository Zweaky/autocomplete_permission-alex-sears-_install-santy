<?php

class Scheduled extends Eloquent {
	
    public static $table = 'scheduled_classes';

    public function course() {
        return $this->belongsTo('Course');
    }

    public function instructor() {
        return $this->belongsTo('Instructor');
    }

}


