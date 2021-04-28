<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{



public function __construct()
    {
        parent::__construct(4, 130);

    }


    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck) 
        {
            $addVehicle = parent::getCurrentVehicles();
            array_unshift($addVehicle, $vehicle);
            parent::setCurrentVehicles($addVehicle);
        } else {
            return "Seulement, les voitures et camions sont autorisés";
        }
    }

}