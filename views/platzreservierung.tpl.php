<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>tennisplatzreservierung für zwei Plaetze</title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/underMain-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/platzreservierung-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>

    <?php require_once 'views/navbar.php'; ?>
    <header id="header">
      <div class="headertext">
        <h1>Tennisplatz</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="container-img">
          <img src="images/schlaeger.jpeg" alt="">
        </div>
        <div class="container-text">
          <h1>Tennisplatz</h1>
          <p>Wir bieten Tennisspielern <strong>zwei</strong> Tennisplätze mit Kunstrasen und einen wunderschönen Ausblick auf das Etschtal.
             Dazu kommen noch Schläger- und Ballausleihe, spannende Tuniere an Wochentagen und Tenniskurse für Anfänger und Fortgeschrittene.
             Die Reservierung für die Plätze findet online oder telefonisch statt.
           </p>
          <!--<a href="?aktion=reservierungErstellen">jetzt reservieren</a>-->
          <?php if(!isset($_SESSION["loggedIn"])){ ?>
            <p>Zum Reservierung: <a href="?aktion=login">login</a></p>
          <?php }else { ?>
            <button type="button" id="myBtn" onclick="clickBtn()">jetzt reservieren</button>
          <?php } ?>
        </div>
      </div>
    </main>
    <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="index.php?aktion=resErstellen" method="post" id="seaerchForTimes">
        <div class="court">
          <h2>Platzauswahl:</h2>
          <select class="court-select" id="platznummer" name="court-s">
            <option value="1">Platz A</option>
            <option value="2">Platz B</option>
          </select>
        </div>
        <div class="calendar-body">
        <div class="calendar">
          <div class="wrapper">
            <div class="container-calendar">
              <div class="button-container-calendar">
                <button type="button" id="previous">&#8249;</button>
                <button type="button" id="next">&#8250;</button>
                <h3 id="monthHeader"></h3>
                <p id="yearHeader"></p>
              </div>

              <table class="table-calendar" id="calendar">
                <thead id="thead-month"></thead>
                <tbody id="calendar-body"></tbody>
              </table>

              <div class="footer-container-calendar">
                <label for="month">Jump To: </label>
                <select id="month">
                  <option value=0>Jan</option>
                  <option value=1>Feb</option>
                  <option value=2>Mär</option>
                  <option value=3>Apr</option>
                  <option value=4>Mai</option>
                  <option value=5>Jun</option>
                  <option value=6>Jul</option>
                  <option value=7>Aug</option>
                  <option value=8>Sep</option>
                  <option value=9>Okt</option>
                  <option value=10>Nov</option>
                  <option value=11>Dez</option>
                </select>
                <select id="year"></select>
              </div>


              <p id="date-picked"></p>
              <input type="text" id="date" name="date" hidden required>
            </div>
          </div>
        </div>
          <div class="time" id="time-select"></div>
        <div class="res-button">
          <button type="submit" name="submit" class="button">reservieren</button>
        </div>
      </div>
        <?php
       if(isset($_SESSION["errorMessageRes"])) {
        ?>
        <div class="error-message"><?php echo $_SESSION["errorMessageRes"]; ?></div>
        <?php
        unset($_SESSION["errorMessageRes"]);
        }
        ?>
      </form>
    </div>
  </div>
    <?php require_once 'views/footer.php'; ?>

    <script src="scripts/navbar.js" type="text/javascript"></script>
    <script src="scripts/re.js" type="text/javascript"></script>
    <script src="scripts/modalwindow.js" type="text/javascript"></script>
  </body>
</html>
