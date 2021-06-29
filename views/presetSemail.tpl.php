<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/login-styles.css"/>
  </head>
  <body>
    <header>
      <h1></h1>
    </header>
    <main>

        <div class="head">
          <div class="zurueck">
            <a href="?aktion=login"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
          </div>
            <h1>Ich habe mein Cheers-Passwort vergessen!</h1>
          </div>
      <div class="container">
        <div class="reset-label">
          <label for="user_mail">Geben Sie ihre E-Mail-Adresse ein.</label>
        </div>
        <div class="reset-input">
          <form action="?aktion=checkMailForPassReset" method="post">
            <input name="mt" type="email" class="" required>
            <input type="submit" name="submit" value="senden" class="btn">
          </form>
        </div>
      </div>
      <?php
      if(isset($_SESSION["errorMessagePassReset"])) {
        ?>
        <div class="error-mess"><?php  echo $_SESSION["errorMessagePassReset"]; ?></div>
        <?php
        unset($_SESSION["errorMessagePassReset"]);
      }
      ?>
    </main>
  </body>
</html>
