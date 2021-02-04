<?php
require_once '../../entities/db.php';
require_once '../../entities/benutzer.php';
require_once '../../entities/reservierung.php';
if(isset($_GET["datum"]) && isset($_GET["platznummer"])){
  $avaibableTimes = array("08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00");
  $res = Reservierung::findeNachDatumVonPlatz($_GET["datum"], $_GET["platznummer"]);
  echo "<select name='times' id='times'>";

  if(is_array($res)){
    for ($i=0; $i < $avaibableTimes.count(); $i++) {
      foreach ($res as $r) {
        if ($r == $avaibableTimes[$i]) {
          echo "<option value=".$r->getVon().">".$r->getVon()."-".$r->getBis()."</option>";
        }
        echo "<option value=".$r->getVon().">".$r->getVon()."-".$r->getBis()."</option>";
      }
    }

  }else{
      echo "<option value=".$res->getVon().">".$res->getVon()."-".$res->getBis()."</option>";
  }


  echo "</select>";
}
?>
