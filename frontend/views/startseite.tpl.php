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
      <h1>Cheers</h1>
      <h2>Burger - Bar - Lounge</h2>
      <button type="button" name="button">Tennisplatz</button>
    </div>
  </header>

<main>
  <div class="a1">
    <h1>There is random Text!</h1>
    <div class="suchleiste">
      <input type="searchbox" />
      <button type="button">SUCHEN</button>
    </div>
  </div>
  <div class="a2">
    <div id="beschA2">
      <h2>Überschrift</h2>
      <p>One advanced diverted domestic sex repeated bringing you old.
        Possible procured her trifling laughter thoughts property she met way.
        Companions shy had solicitude favourable own. Which could saw guest man now heard but.
        Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by.</p>
    </div>
      <div class="info">
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
      <!--<div class="map" id="mapid"></div>-->

  </div>
  <div class="a3">
    <table>
      <tr>
        <td rowspan="2" class="gross">
          <a href="?aktion=platzreservierung"><img src="images/bildplatzhalter.png" alt="cheers-logo" title="Tennisplatz"></a>
        </td>
        <td class="klein">
          <a href="?aktion=startseite"><img src="images/bildplatzhalter.png" alt="cheers-logo" title="Bar"></a>
        </td>
      </tr>
      <tr>
        <td class="klein">
          <a href="?aktion=wetterbericht"><img src="images/bildplatzhalter.png" alt="cheers-logo" title="Wetter"></a>
        </td>
      </tr>
    </table>
  </div>
  <div class="a4">
    <h1></h1>
    <div class="">

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
<script>
document.getElementById("defaultOpen").click();
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
