<?php

require_once '../config/config.php';
require_once '../models/herriak.php';
require_once '../controllers/herriakController.php';

use Controllers\HerriaController;

// Crear una instancia del controlador y llamar a listAll para mostrar la lista de herriak
$herriaController = new HerriaController();
$herriaController->listAll();

?>
