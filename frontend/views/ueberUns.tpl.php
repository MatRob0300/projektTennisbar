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
    <?php require_once 'views/navbar.php'; ?>
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
    <script src="scripts/navbar.js" type="text/javascript"></script>
  </body>
</html>
