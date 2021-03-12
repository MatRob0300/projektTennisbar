<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/ueberUns-styles.css">
  </head>
  <body>
    <?php require_once 'views/navbar.tpl.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Über uns</h1>
      </div>
    </header>
    <main>
      <div class="quotation">
        <cite>„Cheers to the people, who love us, the losers who lost us and the lucky guys who get to meet us!“</cite>
      </div>
      <div class="firstParagraph">
        <p>Unsere Philosophie ist simple. Die beste Qualität.
          100% einheimisches Fleisch, 100% selbstgemachte Saucen, einheimische Eier,
          viel selbstgemachtes Brot, eine gute und breite Bierauswahl und nuuuur gute Laune.
          - Ja, Fastfood geht auch anders ;)</p>
      </div>
      <div class="secondParagraph">
        <p>Wir finden, dass das Leben zu kurz ist für schlechtes Essen.
          Deshalb werden die Burger bei uns so serviert, wie sie sein sollen:
          hausgemacht, saftig und mit frischen und einheimischen Zutaten.
          Auch das Trinken soll zu diesem Konzept passen -
          deshalb versuchen wir einheimische Produzenten zu unterstützen und auf Qualität besonders zu achten.
          Nur das Beste für unsere Gäste!</p>
      </div>
      <div class="closing">
        <p>#wirliebenburger</p>
      </div>
      <div class="picture">
        <img src="images/bildplatzhalter.png" alt="bildTennisbar">
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
