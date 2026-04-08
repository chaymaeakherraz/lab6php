<?php
namespace App\Service;

use App\Exception\BusinessException;
use App\Entity\Etudiant;

class EtudiantService {

    private $dao,$fdao;

    public function __construct($d,$f){
        $this->dao=$d;
        $this->fdao=$f;
    }

    public function create($dto){

        if(!filter_var($dto->getEmail(),FILTER_VALIDATE_EMAIL)){
            throw new BusinessException("email invalide");
        }

        if(!$this->fdao->findById($dto->getFiliereId())){
            throw new BusinessException("filiere inexistant");
        }

        $e=new Etudiant(null,$dto->getCne(),$dto->getNom(),$dto->getPrenom(),$dto->getEmail(),$dto->getFiliereId());
        return $this->dao->insert($e);
    }
}