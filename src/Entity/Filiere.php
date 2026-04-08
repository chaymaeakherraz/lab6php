<?php
namespace App\Entity;

class Filiere {
    private $id,$code,$libelle;

    public function __construct($id,$code,$libelle){
        $this->id=$id;
        $this->code=$code;
        $this->libelle=$libelle;
    }

    public function getId(){return $this->id;}
    public function getCode(){return $this->code;}
    public function getLibelle(){return $this->libelle;}
}