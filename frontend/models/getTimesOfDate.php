<?php
require_once '../../entities/db.php';
require_once '../../entities/benutzer.php';
require_once '../../entities/reservierung.php';
if(isset($_GET["datum"]) && isset($_GET["platznummer"])){
  $times = array("08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00","22:00");
  $avaibableTimes = new SplFixedArray(count($times));
  var_dump($avaibableTimes);
  $res = Reservierung::findeNachDatumVonPlatz($_GET["datum"], $_GET["platznummer"]);
  //var_dump($avaibableTimes);
  foreach ($res as $r) {
    $count = 0;
    while (count($times)) {
      if ($times[$count] != $r->getVon() && $times[$count] != $avaibableTimes[$count]) {
        // code...
      }
    }
  }
  echo "<select name='times' id='times'>";
        echo "<option value='vuw'>verfügbare Uhrzeit wählen!</option>";
  for ($i=0; $i < count($avaibableTimes)-1; $i++) {
        echo "<option value=".$avaibableTimes[$i].">".$avaibableTimes[$i]." - ".$avaibableTimes[$i+1]."</option>";
  }
      //echo "<option value=".$r->getVon().">".$r->getVon()."-".$r->getBis()."</option>";
  echo "</select>";
}
?>
