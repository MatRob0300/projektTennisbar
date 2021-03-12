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
    <?php require_once 'views/navbar.tpl.php'; ?>
    <header id="header">
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

    <?php require_once 'views/footer.tpl.php'; ?>

    <script src="scripts/wetter.js" type="text/javascript"></script>
    <script src="scripts/navbar.js" type="text/javascript"></script>

  </body>
</html>
