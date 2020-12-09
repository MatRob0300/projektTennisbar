<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/wetterbericht-styles.css"/>
    <title>Wetterbericht Andrian</title>
  </head>
  <body>
    <div class="obersteLeiste">
      <div class="logo">
        <a href="?aktion=startseite"><img src="images/cheersLogo.png" alt="cheers-logo" title="Startseite"></a>
      </div>
      <div class="titelUntertitel">
        <h1>Cheers</h1>
        <h2>Tennisbar Andrian</h2>
      </div>
      <div class="reglog">
        <a href="#"><img src="images/profilIcon.png" alt="profil-icon" title="Anmelden"></a>
      </div>
      <nav>
        <a href="?aktion=startseite">Startseite</a>
        <a href="#">Bar</a>
        <a href="?aktion=wetterbericht">Wetter</a>
        <a href="?aktion=platzreservierung">Tennisplatz</a>
        <a href="#">Über uns</a>
      </nav>
    </div>
    <header>
      <div class="headertext">
        <h1>Wetter</h1>
      </div>
    </header>
    <main>
      <!--
      http://daten.buergernetz.bz.it/de/dataset/southtyrolean-weatherservice-weathersouthtyrol
      http://daten.buergernetz.bz.it/services/weather/district/1/bulletin?format=json&lang=de
      -->
      <?php
        $daten = json_decode(file_get_contents("http://daten.buergernetz.bz.it/services/weather/bulletin?format=json&lang=de"),true);
        //var_dump($daten);
      ?>

      <h1>Wetter</h1>

      <div class="container">
        <div class="today">
          <div class="location">
            <p>Heute</p>
          </div>
          <div class="temp">
            <img id="temp-icon" src="<?php echo $daten['today']['stationData'][4]['symbol']['imageUrl']?>" alt="sun">
            <p><span id="temp-value"><?php echo $daten['today']['stationData'][4]['min']?> bis <?php echo $daten['today']['stationData'][4]['max']?></span><span id="temp-unit">°C</span></p>
          </div>
          <div class="climate">
            <p><?php echo $daten['today']['stationData'][4]['symbol']['description']?></p>
          </div>

        </div>
        <div class="tomorrow">
          <div class="location">
            <p>Morgen</p>
          </div>
          <div class="temp">
            <img id="temp-icon" src="<?php echo $daten['tomorrow']['stationData'][4]['symbol']['imageUrl']?>" alt="sun">
            <p><span id="temp-value"><?php echo $daten['tomorrow']['stationData'][4]['min']?> bis <?php echo $daten['tomorrow']['stationData'][4]['max']?></span><span id="temp-unit">°C</span></p>
          </div>
          <div class="climate">
            <p><?php echo $daten['tomorrow']['stationData'][4]['symbol']['description']?></p>
          </div>
      </div>

    </main>
    <aside>
      <div class="side-box">
        <div class="side-box-header">
          <h2>Suche</h2>
        </div>
        <div class="suchleiste">
          <input type="searchbox" />
          <button type="button">SUCHEN</button>
        </div>
      </div>
      <div class="side-box">
        <div class="side-box-header">
          <h2>Info</h2>
        </div>
        <div class="info">
          <div class="texticon">
            <h1>&#9982;</h1>
          </div>
          <div class="textinfo">
            <h2>Bar</h2>
            <a href="#">zur Bar</a>
          </div>
        </div>
        <div class="info">
          <div class="texticon">
            <h1>&#9977;</h1>
          </div>
          <div class="textinfo">
            <h2>Tennis</h2>
            <a href="?aktion=platzreservierung">zur Platzreservierung</a>
          </div>
        </div>
      </div>
    </aside>

  </body>
</html>
