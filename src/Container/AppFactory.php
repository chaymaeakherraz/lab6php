<?php
namespace App\Container;

use App\Controller\AppController;
use App\Service\FiliereService;
use App\Service\EtudiantService;
use App\Dao\FiliereDao;
use App\Dao\EtudiantDao;

class AppFactory {

    public static function create(){
        $fDao=new FiliereDao();
        $eDao=new EtudiantDao();

        $fs=new FiliereService($fDao,$eDao);
        $es=new EtudiantService($eDao,$fDao);

        return new AppController($fs,$es);
    }
}