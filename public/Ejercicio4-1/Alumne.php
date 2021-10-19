<?php
namespace App;
class Alumne
{
    private $dni;
    private $nom;
    private $dataNaiximent;
    private $sexe;
    private $hobby;
    private $foto;


    public function __construct($dni, $nom, $dataNaiximent, $sexe, $hobby,$foto)
    {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->dataNaiximent = $dataNaiximent;
        $this->sexe = $sexe;
        $this->hobby = $hobby;
        $this->foto=$foto;
    }

    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this->$name;
        }
        return false;
    }

}