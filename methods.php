<?php

class Car
{
    public $brand;
    public $color;
    
    public function start()
    {
        return "The car is starting...";
    }
    
    public function getDescription()
    {
        return "This is a {$this->color} {$this->brand}.";
    }
}

$myCar = new Car();
$myCar->brand = "Honda";
$myCar->color = "Blue";

echo $myCar->start(); // Output: The car is starting...
echo $myCar->getDescription(); // Output: This is a Blue Honda.