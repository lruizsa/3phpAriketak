<?php

namespace Controllers;

use PDO;
use Models\Herria;

class HerriaController{

    // nola inprimatuko diren datuak
    public function listAll(){

        $herria = new Herria();
        $herriakLista = $herria->getAll();
        
        require_once '../views/herriakVista.php';


    }

}

?>