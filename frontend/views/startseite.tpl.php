<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/startseite-styles.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
                integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>

    <title>Hier befindet man sich auf der Startseite!</title>
  </head>
  <body>


  <div class="obersteLeiste">
    <div class="logo">
      <img src="images/cheersLogo.png" alt="Cheers-Logo">
    </div>
    <div class="titelUntertitel">
      <h1>Cheers</h1>
      <h2>Tennisbar Andrian</h2>
    </div>
    <nav>
      <a href="#">Startseite</a>
      <a href="#">Bar</a>
      <a href="?aktion=wetterbericht">Wetter</a>
      <a href="?aktion=platzreservierung">Tennisplatz</a>
      <a href="#">Über uns</a>
    </nav>
  </div>
  <header>
    <div class="headertext">
      <h1>Cheers</h1>
      <h2>Burger - Bar - Lounge</h2>
      <button type="button" name="button">Platzreservierung</button>
    </div>
  </header>

<main>
  <div class="a1">
    <h1>Subscribe to our newsletter</h1>
    <div class="suchleiste">
      <input type="searchbox" />
      <button type="button">SUCHEN</button>
    </div>
  </div>
  <div class="a2">
    <h2>Überschrift</h2>
    <p>Hier gibt es noch einen Text!</p>
      <div class="info">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'Kontakt')">Kontakt</button>
          <button class="tablinks" onclick="openInfo(event, 'Öffnungszeiten')">Öffnungszeiten</button>
        </div>
        <div id="Kontakt" class="tabcontent">
          <ul>
          <li>Schwimmbadstraße 1, 39010 Andrian, Südtirol</li>
          <li>Tel. +39 123456789</li>
          </ul>
        </div>
        <div id="Öffnungszeiten" class="tabcontent">
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
  <div class="a3">
    <!--<div class="flex-container">
      <div>1</div>
      <div>2</div>
      <div>3</div>
    </div>-->
  </div>
</main>

<footer></footer>

<script>
  var map = L.map('mapid').setView([46.521202,11.2272281], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker([46.521202,11.2272281]).addTo(map)
  .bindPopup("Hier sind wir!").openPopup();

    //map.locate({setView: true, maxZoom: 16});

</script>
<script>
  function openInfo(evt, infoName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(infoName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>

  </body>
</html>
