<?php
require_once '../../entities/db.php';
require_once '../../entities/benutzer.php';
require_once '../../entities/reservierung.php';
if(isset($_GET["benutzer"])){
  echo "<thead>";
  echo "<tr>";
  echo "<th>Nr.</th>";
  echo "<th>Vorname</th>";
  echo "<th>Nachname</th>";
  echo "<th>Email</th>";
  echo "<th>Telefonnummer</th>";
  echo "<th>Reservierungen</th></tr>";
  echo "</thead>";
  echo "<tbody>";
  if ($_GET["benutzer"] != "all") {
    $res = Benutzer::finde($_GET["benutzer"]);
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>".$res->getVorname()."</td>";
    echo "<td>".$res->getNachname()."</td>";
    echo "<td>".$res->getEmail()."</td>";
    echo "<td>".$res->getTelefonnummer()."</td>";
    echo "<td><button type='button' name='button' class='btn' onclick='showResOfUser(".$res->getBenutzerid().")'>anzeigen</button></td>";
    echo "</tr>";
    echo "</tbody";
  }else{
    $res = Benutzer::findeAlle();
  }


  foreach ($res as $key => $re) {
    echo "<tr>";
    echo "<td>".($key+1)."</td>";
    echo "<td>".$re->getVorname()."</td>";
    echo "<td>".$re->getNachname()."</td>";
    echo "<td>".$re->getEmail()."</td>";
    echo "<td>".$re->getTelefonnummer()."</td>";
    echo "<td><button type='button' name='button' class='btn' onclick='showResOfUser(".$re->getBenutzerid().")'>anzeigen</button></td>";
    echo "</tr>";
  }
  echo "</tbody";
}
?>
