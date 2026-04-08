<?php
namespace App\Dto;

class EtudiantCreateDTO {
    private $cne,$nom,$prenom,$email,$filiereId;

    public function __construct($c,$n,$p,$e,$f){
        $this->cne=$c;
        $this->nom=$n;
        $this->prenom=$p;
        $this->email=$e;
        $this->filiereId=$f;
    }

    public function getCne(){return $this->cne;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getEmail(){return $this->email;}
    public function getFiliereId(){return $this->filiereId;}
}