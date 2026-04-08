<?php

spl_autoload_register(function($class){
    $class=str_replace("App\\","",$class);
    require "../src/".str_replace("\\","/",$class).".php";
});

use App\Container\AppFactory;

$ctrl = AppFactory::create();

$res = $ctrl->handle([
    "action"=>"create_filiere",
    "code"=>"info",
    "libelle"=>"Informatique"
]);

var_dump($res);

$res2 = $ctrl->handle([
    "action"=>"create_etudiant",
    "cne"=>"CNE1234",
    "nom"=>"Ali",
    "prenom"=>"Ahmed",
    "email"=>"ali@gmail.com",
    "filiere_id"=>1
]);

var_dump($res2);