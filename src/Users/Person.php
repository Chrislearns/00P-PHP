<?php
namespace FreshPencils\Users;


class Person {

  protected $name;

  public function __construct($name)
  {
      $this->name = $name;
  }
}
