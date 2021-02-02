<?php
echo 'hallo';
$reservierung = Reservierung::findeVorUndBisNachDatum($_GET['q']);

echo "<select name='times' id='times'>";
  foreach ($reservierung as $key => $value) {
    echo "<option value=".$key.">".$value->getVon()." - ".$value->getBis()."</option>";
  }
echo "</select>";

?>
