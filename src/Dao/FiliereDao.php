<?php
namespace App\Dao;

use App\Database\DBConnection;

class FiliereDao {

    public function insert($f){
        $pdo=DBConnection::get();
        $stmt=$pdo->prepare("INSERT INTO filiere(code,libelle) VALUES (?,?)");
        $stmt->execute([$f->getCode(),$f->getLibelle()]);
        return $pdo->lastInsertId();
    }

    public function findById($id){
        $pdo=DBConnection::get();
        $stmt=$pdo->prepare("SELECT * FROM filiere WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id){
        $pdo=DBConnection::get();
        $stmt=$pdo->prepare("DELETE FROM filiere WHERE id=?");
        return $stmt->execute([$id]);
    }
}