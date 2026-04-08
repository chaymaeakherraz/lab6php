<?php
namespace App\Controller;

class Response {
    private $success,$data,$error;

    public function __construct($s,$d=null,$e=null){
        $this->success=$s;
        $this->data=$d;
        $this->error=$e;
    }

    public function isSuccess(){return $this->success;}
    public function getData(){return $this->data;}
    public function getError(){return $this->error;}
}