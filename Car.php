<?php

class Car
{

    private int $numberWheels;
    private int $currentSpeed;
    private string $color;
    private int $numberSeats;
    private string $energy;
    private int $energyLevel;
    private bool $start = false;

    public function __construct(
        int $numberWheels,
        int $currentSpeed,
        string $color,
        int $numberSeats,
        string $energy,
        int $energyLevel)
    {
        $this->numberWheels = $numberWheels;
        $this->currentSpeed = $currentSpeed;
        $this->color = $color;
        $this->numberSeats = $numberSeats;
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
    }
    
    public function getNumberWheels()
    {
        return $this->numberWheels;
    }

    public function setNumberWheels($numberWheels)
    {
        $this->numberWheels = $numberWheels;

        return $this;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }
 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNumberSeats()
    {
        return $this->numberSeats;
    }

    public function setNumberSeats($numberSeats)
    {
        $this->numberSeats = $numberSeats;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function start (): string
    {
        if ($this->start === false) {
            $this->start = true;
            return 'This car is off! D\'OH!';
        } else {
            $this->start = false;
            return 'This car is on! Vrooom Vrooom!';
        }
    }

    public function foward ()
    {

    }

    public function brake ()
    {

    }

}