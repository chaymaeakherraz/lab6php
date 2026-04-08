<?php
namespace App\Entity;

class Etudiant {
    private $id,$cne,$nom,$prenom,$email,$filiereId;

    public function __construct($id,$cne,$nom,$prenom,$email,$filiereId){
        $this->id=$id;
        $this->cne=$cne;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->filiereId=$filiereId;
    }

    public function getId(){return $this->id;}
    public function getCne(){return $this->cne;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getEmail(){return $this->email;}
    public function getFiliereId(){return $this->filiereId;}
}