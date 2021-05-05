<?php
require_once '../entities/db.php';
require_once '../entities/benutzer.php';
require_once '../entities/kommentar.php';
require_once '../entities/reservierung.php';
//require_once 'models/function.inc.php';
require_once 'controller.php';

    $aktion = isset($_GET['aktion'])?$_GET['aktion']:'hauptpanel';

    $controller = new Controller();

   if(method_exists($controller, $aktion)){
      $controller->run($aktion);
   }else{
     $controller->run("login");
   }

?>
