<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/wetterbericht-styles.css"/>
    <title>Wetterbericht Andrian</title>
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
          <a href="?aktion=wetterbericht">Wetter</a>
          <a href="?aktion=platzreservierung">Tennisplatz</a>
          <a href="#">Über uns</a>
        </nav>
      </div>
    </header>
    <main>
      <a class="weatherwidget-io" id="wetter" href="https://forecast7.com/de/46d5211d23/andrian/" data-label_1="ANDRIAN" data-label_2="Wetter" data-icons="Climacons Animated" data-theme="weather_one" >ANDRIAN Wetter</a>
    </main>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
  </body>
</html>
