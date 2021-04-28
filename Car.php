<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements lightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private  $energy;

    private  $energyLevel;

    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
}

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

 

    public function getHasParkBrake(): string
  {
    if ($this->hasParkBrake === true) {
      return "is off";
    } else {
      return "is on";
    }
  }

  public function setHasParkBrake(bool $hasParkBrake): void
  {
      $this->hasParBrake = $hasParkBrake;
  }
  


    public function switchOn() :bool
    {
        return true;
    }

    public function switchOff() :bool
    {
        return false;
    }
}