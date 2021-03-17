<?php
if(!isset($_SESSION["loggedIn"])){
  header('Location: index.php?aktion=login');}?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/bewertung-erstellen-styles.css">
  </head>
  <body>

    <header>
        <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil" title="zurück"></a>
        <h1>Bewertung-erstellen</h1>
    </header>

    <main>
      <form action="index.php?aktion=saveBewertung&benutzerid=<?php echo $benutzer->getBenutzerid() ?>" method="post">
        	<div class="head-container">
            <div class="b-img">
              <img src="images/bildplatzhalter.png" alt="profil-bild">
            </div>
            <div class="head-info-container">
              <div class="user">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $benutzer->getNachname().' '.substr($benutzer->getVorname(),0,1).'.'?>" placeholder="Name" required>
              </div>
              <div class="date-time">
                <span>Erstellt am: </span><input type="text" name="datum" value="<?php echo date('d.m.Y');?>" disabled><span> , </span><input type="text" name="zeit" value="<?php echo date('H:i');?>" disabled><span>Uhr</span>
              </div>
            </div>
          </div>

          <div class="body-container">
            <div class="bewertung-checkbox">

              <input type="radio" id="be" name="bewertung" value="5" required>
              <label for="sehr-gut">sehr-gut</label>

              <input type="radio" id="be" name="bewertung" value="4">
              <label for="female">gut</label>

              <input type="radio" id="be" name="bewertung" value="3">
              <label for="other">genügend</label>

              <input type="radio" id="be" name="bewertung" value="2">
              <label for="female">schlecht</label>

              <input type="radio" id="be" name="bewertung" value="1">
              <label for="other">sehr-schlecht</label>

            </div>
            <div class="text">
              <textarea name="b_text" rows="20" cols="100%" placeholder="Bewertung schreiben ..." required></textarea>
            </div>
          </div>
          <div class="button">
            <button type="submit" name="submit" title="erstellen">erstellen</button>
          </div>
      </form>
    </main>
  </body>
</html>
