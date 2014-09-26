<?php

class Student extends Eloquent {
  public function student() {
        return $this->belongs_to('Student');
    }
  }

