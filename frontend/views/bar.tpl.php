<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Cheers - Tennisbar Andrian, Burger - Bar - Lounge</title>
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/bar-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/navbar-styles.css">
  </head>
  <body>
    <?php require_once 'views/navbar.tpl.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Bar</h1>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="info-container1">
          <div class="bild">
            <img src="images/bildplatzhalter.png" alt="bild1">
          </div>
          <div class="beschreibung">
            <h1>Überschrift</h1>
            <p>One advanced diverted domestic sex repeated bringing you old.
               Possible procured her trifling laughter thoughts property she met way.
               Companions shy had solicitude favourable own.</p>
          </div>
        </div>
        <div class="info-container2">
          <div class="beschreibung">
            <h1>Überschrift</h1>
            <p>One advanced diverted domestic sex repeated bringing you old.
               Possible procured her trifling laughter thoughts property she met way.
               Companions shy had solicitude favourable own.</p>
          </div>
          <div class="bild">
            <img src="images/bildplatzhalter.png" alt="bild2">
          </div>
        </div>
      </div>
      <!--<div class="cards-container">
        <div class="speisekarte">
          <img id="g-karte" src="images/getraenke-karte.jpeg" alt="speisekarte">
        </div>
        <div class="getraenkekarte">
          <img id="sp-karte" src="images/getraenke-karte.jpeg" alt="getränkekarte">
        </div>
      </div>-->
      <a href="?aktion=speisekarte" target="anzeigen">zu den Speisekarten</a>
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
            <img src="images/telefon-icon.png" alt="telefon-icon">
          </div>
          <div class="textinfo">
            <h2>Telefon</h2>
            <p>+39 123456789</p>
          </div>
        </div>
        <div class="info">
          <div class="texticon">
            <img src="images/email-icon.png" alt="email-icon">
          </div>
          <div class="textinfo">
            <h2>E-Mail</h2>
            <p>max.mustermann@info.com</p>
          </div>
        </div>
        <div class="info">
          <div class="texticon">
            <img src="images/wetter-icon.png" alt="wetter-icon">
          </div>
          <div class="textinfo">
            <h2>Wetter</h2>
            <a href="?aktion=wetterbericht">zum Wetter</a>
          </div>
        </div>
      </div>
    </aside>

    <?php require_once 'views/footer.tpl.php'; ?>

    <script src="scripts/bar.js" type="text/javascript"></script>
    <script src="scripts/navbar.js" type="text/javascript"></script>

  </body>
</html>
