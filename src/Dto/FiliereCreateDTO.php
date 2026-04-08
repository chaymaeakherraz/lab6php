<?php
namespace App\Dto;

class FiliereCreateDTO {
    private $code,$libelle;

    public function __construct($c,$l){
        $this->code=$c;
        $this->libelle=$l;
    }

    public function getCode(){return $this->code;}
    public function getLibelle(){return $this->libelle;}
}