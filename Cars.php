<?php

class Cars {
    private string $name;
    private int $nbWheels = 4;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;
    private int $currentSpeed;

    public function __construct( string $name, string $color,  int $nbSeats, string $energy){
        $this->name = $name;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getEnergy():string
    {
        return $this->energy;
    }
    
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }


    // Départ 

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(): string
    {
        if($this->energyLevel>45)
        {
            return 'Here we go';
        }
        elseif($this->energyLevel==45){
            return 'I\' have just enough energy. It will be tricky, go';
        }
        else {
            return 'I don\'t have enough energy';
        }

    }

    //forward

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function forward(): string
    {
        if($this->currentSpeed <= 40) {
            return 'Damn, this car is too slow';
        } elseif ($this->currentSpeed >40 && $this->currentSpeed<80) {
            return 'It\'s not enough, I should accelerate ';
        } else {
            return 'I am fast as a torpedo !!';
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "VROOM !!!";
        }
        $sentence .= " I'm stopped !";
        return $sentence;
        }
    }


