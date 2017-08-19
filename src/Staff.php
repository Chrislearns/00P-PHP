<?php

namespace FreshPencils;

use FreshPencils\Users\Person;

class Staff {
  protected $member = [];


  public function __construct($member = []){
    $this->member = $member;
  }

  public function add(Person $person)
  {
    $this->member[] = $person;
  }

  public function member(){
    return $this->member;
  }
}
