<?php
require_once '../../entities/db.php';
require_once '../../entities/benutzer.php';
require_once '../../entities/kommentar.php';

$kommentare = Kommentar::findeAlle();

foreach ($kommentare as $index => $kommentar):
echo "<div id='b-con'>";
echo "<div class='k-container'>";
echo "<div class='k-profilIcon'>";
echo "<img src='images/bildplatzhalter.png' alt='profilIcon'></div>";
echo "<div class='k-info'>";
echo "<h1>".$kommentar->getKname()."</h1>";
echo "<h2> Erstellt am: ".$kommentar->getDatum()." Uhr</h2></div></div>";

echo "<div class='k-inhalt'>";
echo "<div class='k-bewertung'>";
switch ($kommentar->getBewertung()) {
      case 1:
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
      break;
      case 2:
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
      break;
      case 3:
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star'></span>";
echo "<span class='fa fa-star'></span>";
      break;
      case 4:
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star'></span>";
      break;
      case 5:
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
      break;
      }
echo "</div>";
echo "<div class='k-text'>";
echo "<p>".$kommentar->getText()."</p></div></div>";
echo "</div>";
endforeach;
?>
