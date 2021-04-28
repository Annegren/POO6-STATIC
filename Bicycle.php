<?php
require_once 'Vehicle.php';
require_once 'LightableInterface';

class Bicycle extends Vehicle implements lightableInterface
{

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10){
            return false;
        }
        return true; 
    }

    public function switchOff(): bool
    {
        return false; 
    }
   
}


