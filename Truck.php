<?php
require_once 'Vehicle.php';


class Truck extends Vehicle
{
  private  $storage;

  private  $loading = 0;

  public function __construct(string $color, int $nbSeats, string $energy, int $storage)
  {
    parent::__construct($color, $nbSeats);
    $this->storage = $storage;
    $this->energy = $energy;
  }

  public function getStorage(): string
  {
    if ($this->storage === $this->loading) {
      return "full";
    } else {
      return "in filling";
    }
  }

  public function setStorage(int $storage): void
  {
    $this->storage = $storage;
  }

  public function getLoading(): int
  {
    return $this->loading;
  }

  public function setloading(int $loading): int
  {

    return $this->loading = $loading;
  }
}
