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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
      <?php
      if(!isset($_SESSION["loggedIn"])){
        echo "<div class='reglog'>";
        echo $log = "<a href='?aktion=login'><img src='images/profilIcon.png' alt='login-icon' title='Anmelden'></a>";
        echo "</div>";
      }else{
        echo "<div class='regbutton'>";
        echo "<div class='dropdown'>";
        echo "<button><img src='images/logout.png'/></button>";
        echo "<div class='dropdown-content'>";
        echo "<a href='?aktion=editprofil'>Mein Profil</a>";
        echo "<a href='?aktion=meineReservierungen'>Meine Reservierungen</a>";
        echo "<a href='?aktion=logout'>Abmelden</a>";
        echo "</div></div></div>";
      }?>
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
</main>

<footer>

  <div class="footer-container">

    <div class="footer-left">
      <div class="footer-left-location">
        <div class="footer-info">
          <div class="footer-texticon">
            <img src="images/locationIcon.png" alt="bar-icon">
          </div>
          <div class="footer-textinfo">
            <h2>Schwimmbadstraße 1</h2>
            <p>Andrian, Italien</p>
          </div>
        </div>
      </div>
      <div class="footer-left-phone">
        <div class="footer-info">
          <div class="footer-texticon">
            <img src="images/telefon-icon.png" alt="bar-icon">
          </div>
          <div class="footer-textinfo">
            <p>+39 123456789</p>
          </div>
        </div>
      </div>
      <div class="footer-left-mail">
        <div class="footer-info">
          <div class="footer-texticon">
            <img src="images/emailIcon.png" alt="bar-icon">
          </div>
          <div class="footer-textinfo-e">
            <p>herr.mustermann@muster.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-right">
      <div class="footer-right-text">
        <h1>About the Company</h1>
        <p>One advanced diverted domestic sex repeated bringing you old.
          Possible procured her trifling laughter thoughts property she met way.
          Companions shy had solicitude favourable own.</p>
      </div>
      <div class="footer-right-hyperlinks">
        <div class="link">
          <a href="#"><img src="images/facebookIcon.png" alt=""></a>
        </div>
        <div class="link">
          <a href="#"><img src="images/gitHubIcon.png" alt=""></a>
        </div>
        <div class="link">
          <a href="#"><img src="" alt=""></a>
        </div>
      </div>
    </div>
  </div>

</footer>
<script src="models/startseite.js" type="text/javascript"></script>
</html>
