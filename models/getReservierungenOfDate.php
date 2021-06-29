<?php
require_once '../entities/db.php';
require_once '../entities/benutzer.php';
require_once '../entities/reservierung.php';
if(isset($_GET["datum"]) && isset($_GET["benutzer"])){
  echo "<thead>";
  echo "<tr>";
  echo "<th>Nr.</th>";
  echo "<th>Platz</th>";
  echo "<th>Datum</th>";
  echo "<th>Zeit</th></tr>";
  echo "</thead>";
  echo "<tbody>";
  if ($_GET['datum'] == 'all') {
    $res = Reservierung::findeAlleNachBenutzer(Benutzer::finde($_GET["benutzer"]));
  }else if($_GET['datum'] == 'heu'){
    $res = Reservierung::findeAlleHeutigenResVonBenutzer(Benutzer::finde($_GET["benutzer"]));
  }else{
    $res = Reservierung::findeNachDatumVonBenutzer($_GET["datum"], $_GET["benutzer"]);
  }

  foreach ($res as $key => $re) {
    echo "<tr>";
    echo "<td>".($key+1)."</td>";
    if ($re->getPlatznummer() == 1) {
      echo "<td>Platz A</td>";
    } else {
      echo "<td>Platz B</td>";
    }
    echo "<td>".$re->getDatum()."</td>";
    echo "<td>".$re->getZeit()."</td>";
    echo "<td><a href='?aktion=loescheReservierung&reservierungid=".$re->getReservierungid()."' class='btn'>löschen<a></td>";
    echo "</tr>";
  }
  echo "</tbody";
}
?>
