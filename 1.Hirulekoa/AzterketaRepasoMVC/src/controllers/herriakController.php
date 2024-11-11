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

    public function egunekoIragarpenaList($id_herria){
        
        $herria = new Herria();
        $herriakEguneko = $herria->getIragarpenEguna($id_herria);
        
        require_once '../views/herriakVista.php';

    }

}

?>