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
        <div class="item l">
          <figure class="tm-description-figure">
            <img src="images/bildplatzhalter.png" alt="Image" class="img-fluid" />
          </figure>
        </div>
        <div class="item r">
          <div class="tm-description-box">
            <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
            <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited.
               You will need to for additional permissions about our templates. Thank you.</p>
            <a href="?aktion=speisekarte" target="karten" class="tm-btn tm-right">unsere Karten</a>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div class="flex-item">
          <article class="tm-gallery-item">
						<figure>
							<img src="images/bildplatzhalter.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Tiroler Burger</h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
							</figcaption>
						</figure>
					</article>
        </div>
        <div class="flex-item">
          <article class="tm-gallery-item">
						<figure>
							<img src="images/bildplatzhalter.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Classic Burger</h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
							</figcaption>
						</figure>
					</article>
        </div>
        <div class="flex-item">
          <article class="tm-gallery-item">
						<figure>
							<img src="images/bildplatzhalter.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Natur Burger</h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
							</figcaption>
						</figure>
					</article>
        </div>
        <div class="flex-item">
          <article class="tm-gallery-item">
						<figure>
							<img src="images/bildplatzhalter.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Kinder Burger</h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
							</figcaption>
						</figure>
					</article>
        </div>
      </div>
    </main>
    <?php require_once 'views/footer.php'; ?>
    <script src="scripts/navbar.js" type="text/javascript"></script>
	</body>
</html>
