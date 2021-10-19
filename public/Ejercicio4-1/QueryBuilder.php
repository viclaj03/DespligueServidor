<?php

namespace App;
use PDO;


class QueryBuilder
{
    protected $conn;

    /**
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function findAll($nomTaula) {
        $pdoSt = $this->conn->prepare("SELECT * FROM $nomTaula");
        $pdoSt->execute();
        return $pdoSt->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($nomTaula,$id) {
        $pdoSt = $this->conn->prepare("SELECT * FROM $nomTaula WHERE dni = '$id'");
        $pdoSt->execute();
        return $pdoSt->fetch(PDO::FETCH_OBJ);
    }

    public function insertAlumne($nomTaula,$datos) {
        $dni = $datos->dni;
        $nom = $datos->nom;
        $dataNaiximent = $datos->dataNaiximent;
        $sexe = $datos->sexe;
        $hobby = $datos->hobby;
        $foto = $datos->foto;
        $pdoSt = $this->conn->prepare("insert into $nomTaula  (dni,Nom,DataDeNaixement,Sexe,Hobby,Foto) VALUES (?,?,?,?,?,?)");

        $pdoSt->bindParam(1,$dni);
        $pdoSt->bindParam(2,$nom);
        $pdoSt->bindParam(3,$dataNaiximent);
        $pdoSt->bindParam(4,$sexe);
        $pdoSt->bindParam(5,$hobby);
        $pdoSt->bindParam(6,$foto);
        $pdoSt->execute();
        return $pdoSt;
    }
}