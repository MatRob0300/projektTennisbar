<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
  <link rel="stylesheet" type="text/css" href="styles/modal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <h1>Admin - Reservierung erstellen</h1>
  </header>
  <div class="container">
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
        <select name="benutzerid">

          <?php foreach ($allBen as $b) { ?>
            <option value="<?php echo $b->getBenutzerid() ?>"><?php echo $b->getVorname() . " ";
                                                              echo $b->getNachname(); ?></option>
          <?php } ?>
        </select>
        <button type="button" id="myBtn" onclick="clickBtn()" class="btn">neuer Benutzer</button>
        <button type="submit" name="submit" class="btn">reservieren</button>
      </div>
    </div>
    </form>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="ben">
        <h1>Benutzer erstellen</h1>
        <form class="" action="?aktion=benutzerErstellen" method="post">

          <label for="vname">Vorname</label>
          <input type="text" name="vname" value="" placeholder="Vorname"><br>

          <label for="nname">Nachname</label>
          <input type="text" name="nname" value="" placeholder="Nachname"><br>

          <label for="mail">Email</label>
          <input type="email" name="mail" value="" placeholder="Email-Adresse"><br>

          <label for="tel">Telefonnummer</label>
          <input type="text" name="tel" value="" placeholder="Telefonnummer"><br>

          <button type="submit" name="button" class="btn">speichern</button>
        </form>
      </div>
    </div>
  </div>

  <script src="scripts/modalwindow.js" type="text/javascript"></script>
  <script src="../frontend/scripts/re.js" type="text/javascript"></script>
</body>

</html>
