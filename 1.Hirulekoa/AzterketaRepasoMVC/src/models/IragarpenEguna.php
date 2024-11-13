<?php

namespace Models;

use PDO;
use Config\Database;

class Iragarpen{
    private $db;

    // Konexioa egin 
    public function __construct(){
        $this->db=Database::getInstance()->getConnection();  
    }

    public function erakutsiIragarpen($herria_id){
        $query="SELECT h.izena AS herria, ie.eguna, ie.iragarpen_testua, ie.eguraldia,
        ie.tenperatura_minimoa, ie.tenperatura_maximoa FROM herria h JOIN iragarpena_eguna ie ON
        h.id= ie.herria_id ORDER BY ie.eguna";
        $stmt= $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();

    }


    
}



?>