<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
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
        echo "<a href='#'>Meine Reservierungen</a>";
        echo "<a href='?aktion=logout'>Abmelden</a>";
        echo "</div></div></div>";
      }?>
      <nav>
        <a href="?aktion=startseite">Startseite</a>
        <a href="?aktion=bar">Bar</a>
        <a href="?aktion=wetterbericht">Wetter</a>
        <a href="?aktion=platzreservierung">Tennisplatz</a>
        <a href="?aktion=ueberUns
        ">Über uns</a>
      </nav>
    </div>
    <header>
      <div class="headertext">
        <h1>Wetter</h1>
      </div>
    </header>
    <main>
      <!--
      https://openweathermap.org/
      -->
      <h1>Heute</h1>

      <div class="container">
        <div class="weather-icon">
            <img id="temp-icon" src="" alt="">
          <h1 id="weather-description"></h1>
        </div>
        <div class="weather-info">
          <div class="temp">
            <p><span id="temp-h">Temperatur</span></p>
            <p><span id="temp-value"></span><span id="temp-unit">°C</span></p>
          </div>
          <div class="extra-info">
            <div class="wind">
              <p><span>Windstärke:</span><span id="weather-wind"></span><span>km/h</span></p>
            </div>
            <div class="humidity">
              <p><span>Luftfeuchtigkeit:</span><span id="weather-humidity"></span><span>%</span></p>
            </div>
          </div>
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
            <img src="images/bar-icon.png" alt="bar-icon">
          </div>
          <div class="textinfo">
            <h2>Bar</h2>
            <a href="#">zur Bar</a>
          </div>
        </div>
        <div class="info">
          <div class="texticon">
            <img src="images/tennis-icon.png" alt="tennis-icon">
          </div>
          <div class="textinfo">
            <h2>Tennis</h2>
            <a href="?aktion=platzreservierung">zur Platzreservierung</a>
          </div>
        </div>
      </div>
    </aside>

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

    <script src="models/wetter.js" type="text/javascript"></script>

  </body>
</html>
