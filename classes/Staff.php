<?php

namespace PHPOOP;
use PHPOOP\Users\Person;

class Staff {
  protected $members = [];  

  public function add(Person $person) {    
    $this->members[] = $person;
  } // End of public function add(Person $person)

  public function listMembers() {
    echo '<br><br><strong>Staff Members</strong><br>';
    
    foreach($this->members as $member) {
      echo $member->name().'<br>';
    }

    echo '<br>';
  } // End of public function listMembers()

} // End of class Staff