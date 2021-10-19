<?php

class Player extends Member
{
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;

    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function score(){
        $this->goals += 1;
    }

    public function playMinutes($min){
        $this->goals += $min;
    }

    public function render(){
        return '<div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4" style="background-color: yellow">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">' . $this->name . '</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                </div>
                                <!-- Product price-->
                                <p>Edad: ' . $this->age() . '</p>
                                <p>Country: ' . $this->country . '</p>
                                <p>Dorsal: ' . $this->dorsal . '</p>
                                <p>Position: ' . $this->position . '</p>
                                <p>Goals: ' . $this->goals . '</p>
                                <p>Matches: ' . $this->matches . '</p>
                                <p>Minutos: ' . $this->minutes . '</p>
                                <p>Tarjetas Rojas: ' . $this->redCard . '</p>
                                <p>Tarjetas Amarillas: ' . $this->yellowCard . '</p>
                            </div>
                        </div>
                    </div>
                </div>';
    }

}