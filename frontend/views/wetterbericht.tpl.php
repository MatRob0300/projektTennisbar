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
      https://openweathermap.org/
      -->
      <?php/*
        $daten = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat46.521202=&lon=11.2272281&APPID=1d3c3cf9a55237a528ec15dafe5065a3"),true);
        var_dump($daten);*/
      ?>

      <h1>Wetter</h1>

      <div class="container">
        <div class="today">
          <div class="location">
            <p>Heute</p>
          </div>
          <div class="temp">
            <img id="temp-icon" src="" alt="sun">
            <p><span id="temp-value"></span><span id="temp-unit">°C</span></p>
          </div>
          <div class="climate">
            <p id="weather-description"></p>
          </div>

        </div>
        <!--<div class="tomorrow">
          <div class="location">
            <p>Morgen</p>
          </div>
          <div class="temp">
            <img id="temp-icon" src="" alt="sun">
            <p><span id="temp-value"></span><span id="temp-unit">°C</span></p>
          </div>
          <div class="climate">
            <p id="weather-description"></p>
          </div>
      </div>-->

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
    <script type="text/javascript">
  /*  let url = 'https://api.openweathermap.org/data/2.5/weather?q=Bozen,it&units=metric&APPID=1d3c3cf9a55237a528ec15dafe5065a3&lang=de';

      fetch(url)
      .then(res => res.json())
      .then((out) => {
        var maxtemp = out['main']['temp_max'];
        var description = out['weather'][0]['description'];
        var wi1 = "http://openweathermap.org/img/wn/";
        var wi2 = "@2x.png";
        var weathericon = out['weather'][0]['icon'];
        var weatheralt = out['weather'][0]['main'];
        document.getElementById("weather-description").innerHTML = description;
        document.getElementById("temp-icon").src = wi1.concat(weathericon, wi2);
        document.getElementById("temp-icon").alt = weatheralt;
        document.getElementById("temp-value").innerHTML = maxtemp;
        console.log('Checkout this JSON! ', out);
      })
      .catch(err => { throw err });*/

    </script>
  </body>
</html>
