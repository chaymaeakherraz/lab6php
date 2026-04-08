<?php
namespace App\Controller;

use App\Dto\FiliereCreateDTO;
use App\Dto\EtudiantCreateDTO;

class AppController {

    private $fs,$es;

    public function __construct($f,$e){
        $this->fs=$f;
        $this->es=$e;
    }

    public function handle($r){

        try{

            if($r['action']=="create_filiere"){
                $dto=new FiliereCreateDTO($r['code'],$r['libelle']);
                $id=$this->fs->createFiliere($dto);
                return new Response(true,["id"=>$id]);
            }

            if($r['action']=="create_etudiant"){
                $dto=new EtudiantCreateDTO(
                    $r['cne'],$r['nom'],$r['prenom'],$r['email'],$r['filiere_id']
                );
                $id=$this->es->create($dto);
                return new Response(true,["id"=>$id]);
            }

        }catch(\Exception $e){
            return new Response(false,null,$e->getMessage());
        }
    }
}