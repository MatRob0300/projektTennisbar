<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/startseite-styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
                integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Hier befindet man sich auf der Startseite!</title>
  </head>
  <body>


  <?php require_once 'views/navbar.tpl.php'; ?>

  <header id="header">
    <div class="headertext">
      <h1>Cheers</h1>
      <h2>Burger - Bar - Lounge</h2>
      <a href="?aktion=platzreservierung">zum Tennisplatz</a>
    </div>
  </header>

<main>
  <div class="info">
    <div class="info-desc">
      <h1>Überschrift</h1>
      <p>One advanced diverted domestic sex repeated bringing you old.
        Possible procured her trifling laughter thoughts property she met way.
        Companions shy had solicitude favourable own. Which could saw guest man now heard but.
        Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by.</p>
    </div>
    <div class="container">
      <div class="info-text">

        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'oeffnungszeiten')" id="defaultOpen">Öffnungszeiten</button>
          <button class="tablinks" onclick="openInfo(event, 'kontakt')">Kontakt</button>
        </div>

        <div id="kontakt" class="tabcontent">
          <ul>
            <li>Schwimmbadstraße 1, 39010 Andrian, Südtirol</li>
            <li>Tel. +39 123456789</li>
          </ul>
        </div>

        <div id="oeffnungszeiten" class="tabcontent">
          <ul>
            <li>Montag: 10:00 - 18:00Uhr</li>
            <li>Dienstag: 10:00 - 18:00Uhr</li>
            <li>Mittwoch: 10:00 - 18:00Uhr</li>
            <li>Donnerstag: 10:00 - 18:00Uhr</li>
          </ul>
        </div>
      </div>

       <div class="map" id="mapid"></div>

    </div>

  </div>
</main>

<?php require_once 'views/footer.tpl.php'; ?>

<script src="scripts/startseite.js" type="text/javascript"></script>
<script src="scripts/navbar.js" type="text/javascript"></script>
</html>
