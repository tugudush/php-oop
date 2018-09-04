<?php

/*
require 'classes/Person.php';
require 'classes/Staff.php';
require 'classes/Business.php';
*/

require 'vendor/autoload.php';

use PHPOOP\Person;
use PHPOOP\Staff;
use PHPOOP\Business;

$persons = [
  'Jerome',
  'John',
  'Jonathan'
];

$webtheos_staff = new Staff();

foreach($persons as $person) {
  $webtheos_staff->add(new Person($person));
} // End of foreach($persons as $person)

//$webtheos_staff->listMembers();

$webtheos = new Business($webtheos_staff);
$webtheos->hire(new Person('Jay'));

echo '<strong>var_dump($webtheos);</strong>'.'<br>';
echo '<pre>';
var_dump($webtheos);
echo '<pre>';

$webtheos_staff->listMembers();