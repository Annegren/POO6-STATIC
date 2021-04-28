<?php

require_once 'MotorWay.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require 'Speedometer.php';


$bike = New Bicycle("blue", 2);

$car = new Car('green', 4, 'electric');
//echo $car->forward();
//echo $car->brake();
//var_dump($car);

//var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('blue',3, 'gazoil', 1000);
//echo $truck->forward();
//echo $truck->brake();
//var_dump($truck);

echo $truck->getStorage();

$A7 = new MotorWay();
$A7->addVehicle($car);
$A7->addVehicle($bike);
$A7->addVehicle($truck);

var_dump($A7->getCurrentVehicles());

$pedestrian = new PedestrianWay();
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($car);

var_dump($pedestrian->getCurrentVehicles());


$residential = new ResidentialWay();
$residential->addVehicle($car);
$residential->addVehicle($truck);
$residential->addVehicle($bike);

var_dump($residential->getCurrentVehicles());

// poo 6 static

echo Speedometer::convertKmToMiles(10);
echo Speedometer::converMilesTokm(10);

