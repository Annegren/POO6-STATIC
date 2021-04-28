<?php


// Créer une classe abstraite HighWay possédant les propriétés suivantes :

abstract class HighWay 
{
    protected  $currentVehicles = [];

    protected  $nbLane;

    protected  $maxSpeed;

    abstract public function addVehicle(Vehicle $car);



    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    
    

    // Créer les getters et setters correspondants au propriétés ci-dessus

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles) 
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->neLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

}





