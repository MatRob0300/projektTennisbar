<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/register-styles.css">
    <title>Cheers Registrierung</title>
  </head>
  <body>
    <main>
      <div class="header">
        <div class="zurueck">
          <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
        </div>
        <h1>Registrierung</h1>
      </div>
      <div class="frame">
        <form action="index.php?aktion=reg" method="post">
          <div class="v-s">
            <input type="text" name="firstname" placeholder="Vorname" required>
            <input type="text" name="surname" placeholder="Nachname" required>
          </div>
          <div class="e">
            <input type="text" name="email" placeholder="E-Mail-Adresse" required>
          </div>
          <div class="pp">
            <input type="password" name="password" placeholder="Passwort" required>
            <input type="password" name="w-password" placeholder="Passwort wiederholen" required>
          </div>
          <div class="t">
            <input type="text" name="tel" placeholder="Telefon" required>
          </div>
          <div class="sub">
            <div class="n-d">
              <span>Indem du auf „Registrieren“ klickst, stimmst du unseren </span>
              <a href="#">Nutzungsbedingungen</a>
              <span> zu. In unserer </span>
              <a href="#">Datenrichtlinie</a>
              <span> erfährst du, wie wir deine Daten erfassen, verwenden und teilen.</span>
            </div>
            <button type="submit" name="submit" class="button">Registrieren</button>
          </div>
        </form>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
