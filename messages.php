<?php
class Person {

  protected $name;

  public function __construct($name)
  {
      $this->name = $name;
  }
}

class Business {
  protected $staff;

  public function __construct(Staff $staff)
  {
      $this->staff = $staff;
  }

  public function hire(Person $name)
  {
    $this->staff->add($person);
  }

  public function getStaffMembers(){
    return $this->staff->member;
  }
}

class Staff {
  protected $member = [];

  public function add(Person $person)
  {
    $this->member[] = $person;
  }
  public function __construct($member = []){
    $this->member[] = $person;
  }

  public function member(){
    return $this->member;
  }
}

 $chris = new Person("Chris");

 $staff = new Staff($chris);


 $fresh = new Business($staff);


$fresh->hire(new Person("Jane Doe"));
 var_dump($fresh->getStaffMembers());
