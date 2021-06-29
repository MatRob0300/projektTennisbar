<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="styles/register-styles.css">
    <title>Cheers Registrierung</title>
  </head>
  <body>
    <main>
      <div class="header">
        <div class="zurueck">
          <a href="?aktion=login"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
        </div>
        <h1>Registrierung</h1>
      </div>
      <?php
      if(isset($_SESSION["errorMessage"])) {
      ?>
      <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
      <?php
      unset($_SESSION["errorMessage"]);
      }
      ?>
      <div class="frame">
        <form action="index.php?aktion=reg" method="post" onSubmit="return validate();">
          <div class="v-s">
            <input type="text" name="firstname" id="firstname" placeholder="Vorname" required>
            <input type="text" name="surname" id="surname" placeholder="Nachname" required>
          </div>
          <div class="e">
            <input type="text" name="email" id="email" placeholder="E-Mail-Adresse" required>
          </div>
          <div class="pp">
            <input type="password" name="password" id="password" placeholder="Passwort" pattern=".{8,}" required title="mindestens 8 Ziffern">
            <input type="password" name="w-password" id="password-w" placeholder="Passwort wiederholen" pattern=".{8,}" required title="mindestens 8 Ziffern">
          </div>
          <div class="t">
            <input type="text" name="tel" id="tel" placeholder="Telefon" required>
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
    <?php require_once 'views/footer.php'; ?>
  </body>
</html>
