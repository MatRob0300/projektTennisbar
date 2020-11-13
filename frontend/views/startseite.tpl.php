<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/startseite-style.css"/>
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

<header>
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
      <a href="#">Tennisplatz</a>
      <a href="#">Über uns</a>
    </nav>
  </div>
</header>

<main>
  <div class="abschnitt1">
    <h1>Subscribe to our newsletter</h1>
    <div class="suchleiste">
      <input type="searchbox" />
      <button type="button">SUCHEN</button>
    </div>
  </div>
  <div class="abschnitt2">
    <div class="info">
        <article class="infobox">
          <section id="kontakt">
            <h2>Kontakt</h2>
            <div id="inhalt_k">
              <ul>
                <li>Schwimmbadstraße 1, 39010 Andrian, Südtirol</li>
                <li>Tel. +39 123456789</li>
              </ul>
            </div>
          </section>
          <section id="oeffnungszeiten">
            <h2>Öffnungszeiten</h2>
            <div id="inhalt_o">

            </div>
          </section>
        </article>
    </div>
    <div class="map" id="mapid">

    </div>
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

  </body>
</html>
