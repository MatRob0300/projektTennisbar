<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Cheers - Tennisbar Andrian, Burger - Bar - Lounge</title>
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/bar-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/navbar-styles.css">
  </head>
  <body>
    <?php require_once 'views/navbar.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Bar</h1>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="info-container">
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
        <div class="info-container">
          <div class="beschreibung">
            <h1>Überschrift</h1>
            <p>One advanced diverted domestic sex repeated bringing you old.
               Possible procured her trifling laughter thoughts property she met way.
               Companions shy had solicitude favourable own.</p>
               <!--<a href="?aktion=speisekarte" target="anzeigen">zu den Speisekarten</a>-->
          </div>
          <div class="bild">
            <img src="images/bildplatzhalter.png" alt="bild2">
          </div>
        </div>
      </div>
    </main>

    <?php require_once 'views/footer.php'; ?>

    <script src="scripts/bar.js" type="text/javascript"></script>
    <script src="scripts/navbar.js" type="text/javascript"></script>

  </body>
</html>
