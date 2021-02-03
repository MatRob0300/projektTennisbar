<?php
$res = Reservierung::findeNachDatumVonPlatz($datum, $platznummer);

echo "<select name='times' id='times'>";
  foreach ($res as $r) {
    echo "<option value=".$r->getVon().">".$r->getVon()."-".$r->getBis()."</option>";
  }
echo "</select>";
?>
