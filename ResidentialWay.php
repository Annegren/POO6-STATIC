<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct()
    {
        parent::__construct(2, 50);

    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck || $vehicle instanceof Bicycle) 
        {
            $addVehicle = parent::getCurrentVehicles();
            array_unshift($addVehicle, $vehicle);
            parent::setCurrentVehicles($addVehicle);
        } else {
            return "Véhicule pas instancé";
        }
    }

}