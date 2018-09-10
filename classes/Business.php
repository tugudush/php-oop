<?php

namespace PHPOOP;
use PHPOOP\Users\Person;

class Business {
  protected $staff;

  public function __construct(Staff $staff) {
    $this->staff = $staff;
  } // End of public function __construct(Staff $staff)

  public function hire(Person $person) {
    $this->staff->add($person); 
  } // End of public function hire(Person $person)

} // End of class Business