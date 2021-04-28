<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle) 
        {
            $addVehicle = parent::getCurrentVehicles();
            array_unshift($addVehicle, $vehicle);
            parent::setCurrentVehicles($addVehicle);
        } else {
            return "Véhicule non autorisé";
        }
    }



}