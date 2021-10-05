<?php

abstract class Member
{
    protected $name;
    protected $birthDay;
    protected $country;
    protected $yellowCard;
    protected $redCard;

    public function __construct($name, $birthday, $country, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthDay = $birthday;
        $this->country = $country;
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

    public function addCard($colour){
        if ($colour === "redCard") {
            $this->redCard += 1;
        } else if ($colour === "yellowCard") {
            $this->yellowCard += 1;
        }
    }

    public abstract function render();

}