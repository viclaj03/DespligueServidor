<?php

class Player{
    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

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

    public function age(){
        list($dia,$mes,$ano) = explode("/",$this->birthDay);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }

    public function score(){
        $this->goals += 1;
    }
    public function addCard($colour){
        if ($colour === "redCard") {
            $this->redCard += 1;
        } else if ($colour === "yellowCard") {
            $this->yellowCard += 1;
        }
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
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">' . $this->name . '</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                </div>
                                <!-- Product price-->
                                <p>Birthday: ' . $this->birthDay . '</p>
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



