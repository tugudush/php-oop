<?php

namespace PHPOOP\Users;

class Person {
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  } // End of public function __construct($name)

  public function name() {
    return $this->name;
  }

} // End of class Person