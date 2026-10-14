<?php

class Vehicle
{
    protected $engineStatus = "off";
    
    public function startEngine()
    {
        $this->engineStatus = "on";
        return "Engine started";
    }
    
    public function getEngineStatus()
    {
        return $this->engineStatus;
    }
}

$vehicle = new Vehicle();
// echo $vehicle->engineStatus; // ERROR: Cannot access protected property
echo $vehicle->getEngineStatus(); // Works: returns "off"
$vehicle->startEngine();
echo $vehicle->getEngineStatus(); // Works: returns "on"