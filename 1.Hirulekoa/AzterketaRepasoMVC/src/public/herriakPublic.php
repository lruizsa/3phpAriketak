<?php

require_once '../config/config.php';
require_once '../models/herriak.php';
require_once '../controllers/herriakController.php';

use Controllers\HerriaController;

// Inprimatu
$herriaController = new HerriaController();
$herriaListAll = $herriaController->listAll();



?>