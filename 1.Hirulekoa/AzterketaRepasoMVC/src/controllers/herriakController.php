<?php

namespace Controllers;

use Models\Herria;
use Models\Iragarpen;

class HerriaController {

    // Método para obtener y mostrar todos los herriak
    public function listAll() {
        $herria = new Herria();
        $herriakLista = $herria->getAll();
        //var_dump($herriakLista);
        
        // Pasa la lista de herriak a la vista
        require_once '../views/herriakVista.php';
    }

     
    public function kudeatu() {
        $herria = new Herria();
        $herriakLista = $herria->getAll();
        
        // Pasa la lista de herriak a la vista
        require_once '../views/herrienKudeaketa.php';
    }

    public function gehitu($izena){
        $herria = new Herria();
        $herria->gehituHerria($izena);
        //$this->listAll();
        require_once '../views/herrienKudeaketa.php';
    }

    public function ezabatu($id){
        $herria = new Herria();
        $herria->ezabatuHerria($id);
        //$this->listAll();
        require_once '../views/herrienKudeaketa.php';
    }

    public function iragarpen($herria_id){
        $iragarpen = new Iragarpen();
        $iragarpen->erakutsiIragarpen($herria_id);
        require_once '../views/herrienKudeaketa.php';
       
    }
    
}

?>
