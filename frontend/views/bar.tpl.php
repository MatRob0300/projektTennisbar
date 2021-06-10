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
            <h2>Our Specials</h2>
          </div>
          <div class="row bd-1">
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Lorem ipsum dolor</h3>
                <img src="images/burger1.jpeg" class="img-responsive" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Consectetur adipiscing</h3>
                <img src="images/burger2.jpeg" class="img-responsive" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="features-item">
                <h3>Duis sed dapibus</h3>
                <img src="images/burger3.jpeg" class="img-responsive" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
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
                  <h2>Our Story</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
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
              <div class="col-md-10 col-md-offset-1">
                <div class="section-title">
                  <h2>Meet Our Chef</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
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
