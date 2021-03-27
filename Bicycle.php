<?php

class Bicycle
{

    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;
    private bool $start;

    public function __construct(string $color ="red", int $currentSpeed = 0, int $nbSeats = 1, int $nbWheels = 2, bool $start = false)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
        $this->start = $start;
    }

    public function start (): string
    {
        if ($this->start === false) {
            $this->start = true;
            return 'The bicylce is on! Vrooom Vrooom!';
        } else {
            $this->start = false;
            return 'The Bicycle is down! D\'OH!';
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >=0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

}