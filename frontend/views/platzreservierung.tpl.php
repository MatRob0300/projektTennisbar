<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>tennisplatzreservierung für zwei Plaetze</title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/platzreservierung-styles.css">
  </head>
  <body>

    <?php require_once 'views/navbar.tpl.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Tennisplatz</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="container-img">
          <img src="images/bildplatzhalter.png" alt="">
        </div>
        <div class="container-text">
          <h1>Tennisplatz</h1>
          <p>One advanced diverted domestic sex repeated bringing you old.
             Possible procured her trifling laughter thoughts property she met way.
             Companions shy had solicitude favourable own.</p>
          <a href="?aktion=reservierungErstellen">jetzt reservieren</a>
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
    
    <script src="scripts/navbar.js" type="text/javascript"></script>
  </body>
</html>
