<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/bewertung-erstellen-styles.css">
  </head>
  <body>

    <header>
        <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil" title="zurück"></a>
        <h1>Bewertung-erstellen</h1>
    </header>

    <main>
      <form action="" method="post">

        	<div class="head-container">
            <div class="b-img">
              <img src="images/bildplatzhalter.png" alt="profil-bild">
            </div>
            <div class="head-info-container">
              <div class="user">
                <label for="name">Name:</label>
                <input type="text" name="name" value="Matha.R" placeholder="Name" required>
              </div>
              <div class="date-time">
                <span>Erstellt am: </span><input type="text" name="date" value="18.03.2000" disabled><span> , </span><input type="text" name="time" value="15:00" disabled><span>Uhr</span>
              </div>
            </div>
          </div>

          <div class="body-container">
            <div class="bewertung-checkbox">

              <input type="radio" id="sehr-gut" name="bewertung" value="5" required>
              <label for="sehr-gut">sehr-gut</label>

              <input type="radio" id="female" name="bewertung" value="4">
              <label for="female">gut</label>

              <input type="radio" id="other" name="bewertung" value="3">
              <label for="other">genügend</label>

              <input type="radio" id="female" name="bewertung" value="2">
              <label for="female">schlecht</label>

              <input type="radio" id="other" name="bewertung" value="1">
              <label for="other">sehr-schlecht</label>

            </div>
            <div class="text">
              <textarea name="name" rows="20" cols="100%" placeholder="Bewertung schreiben ..." required></textarea>
            </div>
          </div>
          <div class="button">
            <button type="submit" name="submit" title="erstellen">erstellen</button>
          </div>

      </form>
    </main>
  </body>
</html>
