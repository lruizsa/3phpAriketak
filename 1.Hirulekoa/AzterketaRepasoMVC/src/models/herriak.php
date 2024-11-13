<?php

namespace Models;

use PDO;
use Config\Database;

class Herria{
    private $db;

    // Konexioa egin 
    public function __construct(){
        $this->db=Database::getInstance()->getConnection();  
    }

    // Herriak taulako datuak lortu
    public function getAll(){
        $stmt = $this->db->prepare("SELECT * FROM herria");
        $stmt->execute();
        return $stmt->fetchAll(); //fetchAll da lista bat itzultzeko
    }

    public function gehituHerria($izena){
        $query="INSERT INTO herria SET izena = :izena";
        $stmt = $this->db->prepare($query);
        $stmt -> bindParam(":izena",$izena, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function ezabatuHerria($id){
        $query="DELETE FROM herria WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
        return $stmt->execute();
    }
        
}



?>