<?php
namespace App\Dao;

use App\Database\DBConnection;

class EtudiantDao {

    public function insert($e){
        $pdo=DBConnection::get();
        $stmt=$pdo->prepare("INSERT INTO etudiant(cne,nom,prenom,email,filiere_id) VALUES (?,?,?,?,?)");
        $stmt->execute([
            $e->getCne(),
            $e->getNom(),
            $e->getPrenom(),
            $e->getEmail(),
            $e->getFiliereId()
        ]);
        return $pdo->lastInsertId();
    }

    public function countByFiliereId($id){
        $pdo=DBConnection::get();
        $stmt=$pdo->prepare("SELECT COUNT(*) c FROM etudiant WHERE filiere_id=?");
        $stmt->execute([$id]);
        return $stmt->fetch()['c'];
    }
}