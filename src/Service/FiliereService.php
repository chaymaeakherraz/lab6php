<?php
namespace App\Service;

use App\Dao\FiliereDao;
use App\Dao\EtudiantDao;
use App\Dto\FiliereCreateDTO;
use App\Entity\Filiere;
use App\Exception\BusinessException;

class FiliereService {

    private $dao,$etudiantDao;

    public function __construct($d,$e){
        $this->dao=$d;
        $this->etudiantDao=$e;
    }

    public function createFiliere($dto){
        if($dto->getCode()==""){
            throw new BusinessException("code vide");
        }

        $f=new Filiere(null,strtoupper($dto->getCode()),$dto->getLibelle());
        return $this->dao->insert($f);
    }
}