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
        return $stmt->fetchAll();
    }

    public function getIragarpenEguna($id_herria){
        $stmt = $this->db->prepare("SELECT * FROM iragarpena_eguna WHERE herria_id = ?");
        $stmt->execute([$id_herria]);
        return $stmt->fetchAll();
    }


    
}



?>