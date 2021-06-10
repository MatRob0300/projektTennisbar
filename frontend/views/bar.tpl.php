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
      <div id="features" class="text-center">
        <div class="container">
          <div class="section-title">
            <h2>Unsere Spezialitäten</h2>
          </div>
          <div class="row bd-1">
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Chee®se Burger</h3>
                <img src="images/burger1.jpeg" class="img-responsive" alt="burger1">
                <p>Der klassische Burger, aber mit regionalen und selbstgemachten Zutaten.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Der Scharfe</h3>
                <img src="images/burger2.jpeg" class="img-responsive" alt="burger2">
                <p>Für denjenigen, der gerne auch ein wenig Schärfe mag! Mit hausgebackenen Kohlebrötchen.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Dor Gsunde</h3>
                <img src="images/burger3.jpeg" class="img-responsive" alt="burger3">
                <p>Cheers bietet auch veganen Kunden eine kulinarische Spezialität an!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About Section -->
      <div id="about">
        <div class="container-fluid">
          <div class="row row-2">
            <div class="col-xs-12 about-img"></div>
            <div class="col-xs-12 col-md-3 col-md-offset-1">
              <div class="about-text">
                <div class="section-title">
                  <h2>Zubereitung</h2>
                </div>
                <p>Bei uns können Sie zwischen <strong>sechs</strong> Burgerarten wählen. Dazu gibt es noch einige Zubehöre aus der Fritteuse.
                  Für Ihren Durst bieten wir ein breites Sortiment von Getränken an.
                  Für den Heißhunger bietet unsere Küche auch einen hausgemachen Bauerntoast an.</p>
                <p>Unser verarbeitetes Fleisch kommt von der Qualitätsmetzgerei Mair in Terlan.
                  Das Rind wird auf heimischen Höfen und grünen Almwiesen herangezogen.
                  Die frischen Wiesenkräuter und die gesunde Bergluft, bildet den herzlichen und leckeren Geschmack der hauszubereiteten Burger.</p>
                <a href="?aktion=speisekarte" target="karten">unsere Karten</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team Section -->
      <div id="team">
        <div class="container">
          <div id="row">
            <div class="col-md-6">
              <div class="col-md-10 col-md-offset-1 st">
                <div class="section-title">
                  <h2>Eingenanbau</h2>
                </div>
                <p>Für die Zubereitung der Burger verwenden wir Zutaten aus unserem selbst angelegten kleinen Garten.</p>
                <p>Die restlichen Zutaten werden von regionalen Biobauern angekauft.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-img"><img src="images/beet.jpeg" alt="..."></div>
            </div>
          </div>
        </div>
      </div>
      </main>
    <?php require_once 'views/footer.php'; ?>
    <script src="scripts/navbar.js" type="text/javascript"></script>
	</body>
</html>
