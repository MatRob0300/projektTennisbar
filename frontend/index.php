<?php

require_once '../entities/db.php';
require_once '../entities/teilnehmer.php';
require_once 'controller.php';


$aktion = isset($_GET['aktion'])?$_GET['aktion']:'hauptseite';

$controller = new Controller();

if (method_exists($controller, $aktion)){
       $controller->run($aktion);

}


?>
