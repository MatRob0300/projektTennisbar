<?php
require_once '../../entities/db.php';
require_once '../../entities/benutzer.php';
require_once '../../entities/reservierung.php';
if(isset($_GET["datum"]) && isset($_GET["platznummer"])){
  $avaibableTimes = array("08:00 - 09:00","09:00 - 10:00","10:00 - 11:00","11:00 - 12:00","12:00 - 13:00","13:00 - 14:00","14:00 - 15:00","15:00 - 16:00","16:00 - 17:00","17:00 - 18:00","18:00 - 19:00","19:00 - 20:00","20:00 - 21:00","21:00 - 22:00","22:00 - 23:00");
  //var_dump($avaibableTimes);
  $res = Reservierung::findeNachDatumVonPlatz($_GET["datum"], $_GET["platznummer"]);
  //var_dump($newTimes);
  foreach ($res as $r) {
    $count = 0;
    while($count < (count($avaibableTimes)-1)){
      if ($r->getZeit() == $avaibableTimes[$count]) {
        unset($avaibableTimes[$count]);
        $avaibableTimes = array_values($avaibableTimes);
        $count++;
      }else {
        $count++;
      }
    }
  }
  echo "<select name='times' id='times' required>";
  for ($i=0; $i < count($avaibableTimes)-1; $i++) {
        echo "<option value='".$avaibableTimes[$i]."'>".$avaibableTimes[$i]."</option>";
  }
  echo "</select>";
}
?>
