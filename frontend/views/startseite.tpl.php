<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/startseite-styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin=""/>
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
      <a href="?aktion=login"><img src="images/profilIcon.png" alt="profil-icon" title="Anmelden"></a>
    </div>
    <nav>
      <a href="?aktion=startseite">Startseite</a>
      <a href="?aktion=bar">Bar</a>
      <a href="?aktion=wetterbericht">Wetter</a>
      <a href="?aktion=platzreservierung">Tennisplatz</a>
      <a href="?aktion=ueberUns">Über uns</a>
    </nav>

  </div>

  <header>
    <div class="headertext">
      <h1>Cheers</h1>
      <h2>Burger - Bar - Lounge</h2>
      <a href="?aktion=platzreservierung">zum Tennisplatz</a>
    </div>
  </header>

<main>

  <div class="a1">
    <!--<h1>There is random Text!</h1>-->
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

     <div class="map" id="mapid"></div>

  </div>

  <div class="a3">

    <div class="header-a3">
      <h1>Was Andere über uns denken</h1>
      <a href="?aktion=bewertungErstellen"><img src="images/bewertung-erstellen.png" alt="kommentar erstellen" title="Bewertung erstellen"></a>
    </div>

    <div class="flex-container">

      <div>
        <div class="k-container">
          <div class="k-profilIcon">
            <img src="images/bildplatzhalter.png" alt="profilIcon">
          </div>
          <div class="k-info">
            <h1>#r.matha</h1>
            <h2> Erstellt am: 17/12/2020 , 10:59Uhr</h2>
          </div>
        </div>

        <div class="k-inhalt">
          <div class="k-bewertung">
            <span class="fa fa-star checked"></span> <!-- checked füllt die sterne-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="k-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div>

      <div>
        <div class="k-container">
          <div class="k-profilIcon">
            <img src="images/bildplatzhalter.png" alt="profilIcon">
          </div>
          <div class="k-info">
            <h1>#r.matha</h1>
            <h2> Erstellt am: 17/12/2020 , 10:59Uhr</h2>
          </div>
        </div>

        <div class="k-inhalt">
          <div class="k-bewertung">
            <span class="fa fa-star checked"></span> <!-- checked füllt die sterne-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="k-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="more-button">
      <a href="#">erweitern</a>
    </div>
  </div>


</main>

<footer></footer>
<script src="models/startseite.js" type="text/javascript"></script>
</html>
