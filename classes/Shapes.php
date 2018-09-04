<?php

abstract class Shape {

  protected $width;
  protected $height;
  protected $area;
  protected $color;  

  abstract protected function getArea();  
  
} // End of class Shape

class Square extends Shape {  

  public function __construct($width) {
    $this->width = $width;
  } // End of public function __constructor($width)

  public function getArea() {

    $this->area = pow($this->width, 2);
    return $this->area;

  } // End of public function getArea($width)

} // End of class Square extends Shape

Class Rectangle extends Shape {

  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  } // End of public function __constructor($width, $height)

  public function getArea() {    
    $this->area = $this->width * $this->height;
    return $this->area;
  } // End of public function getArea()

} // End of Class Rectangle extends Shape

$square = new Square(5);
$rectangle = new Rectangle(3, 4);

var_dump($square);
var_dump($rectangle);