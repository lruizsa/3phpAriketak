<?php

require_once '../config/config.php';
require_once '../models/herriak.php';
require_once '../controllers/herriakController.php';

use Controllers\HerriaController;

// Crear una instancia del controlador
$herriaController = new HerriaController();

if (isset($_POST['id'])) {
    // Si el 'id' existe, obtenlo
    $id = $_POST['id'];
    $herriaController->ezabatu($id);
} else {
    // Si no se ha recibido el 'id', mostrar un mensaje de error
    echo "Error: No se ha recibido el 'id'.";
}

?>