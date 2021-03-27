<?php

class Car
{

    private int $numberWheels;
    private int $currentSpeed;
    private string $color;
    private int $numberSeats;
    private string $energy;
    private int $energyLevel;
    private bool $start;

    public function __construct(
        int $numberWheels = 4,
        int $currentSpeed = 0,
        string $color = 'red',
        int $numberSeats = 4,
        string $energy = 'gasoil',
        int $energyLevel = 100,
        bool $start = false
        )
    {
        $this->numberWheels = $numberWheels;
        $this->currentSpeed = $currentSpeed;
        $this->color = $color;
        $this->numberSeats = $numberSeats;
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
        $this->start = $start;
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
            return 'The car is on! Vrooom Vrooom!';
        } else {
            $this->start = false;
            return 'The car is off! D\'OH!';
        }
    }

    public function foward (): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake (): string{
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= " I'm stopped";
        return $sentence;
    }

}