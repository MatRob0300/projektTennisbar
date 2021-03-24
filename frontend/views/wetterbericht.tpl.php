<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/wetterbericht-styles.css"/>
    <title>Wetterbericht Andrian</title>
  </head>
  <body>
    <?php require_once 'views/navbar.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Wetter</h1>
      </div>
    </header>
    <main>
      <!--
      https://openweathermap.org/
      -->
      <!--<h1>Heute</h1>

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
              <p><span>Windstärke: </span><span id="weather-wind"></span><span>m/s</span></p>
            </div>
            <div class="humidity">
              <p><span>Luftfeuchtigkeit: </span><span id="weather-humidity"></span><span>%</span></p>
            </div>
          </div>
        </div>
      </div>-->

      	<div id="meteoprovbz_widget"></div>

    </main>

    <?php require_once 'views/footer.php'; ?>
    <script src="https://wetter.ws.siag.it/Widget_v1.svc/web/loadSimpleWidget/de/0/Landscape.js"></script>
    <script src="scripts/wetter.js" type="text/javascript"></script>
    <script src="scripts/navbar.js" type="text/javascript"></script>
    <script>
        meteoprovbz_Widget.CreateWidget(document.getElementById("meteoprovbz_widget"));
    </script>

  </body>
</html>
