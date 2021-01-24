<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/login-styles.css"/>
    <title></title>
  </head>
  <body>
  <main>
    <div class="header">
      <div class="zurueck">
        <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
      </div>
      <h1>Login</h1>
    </div>
    <div class="frame">
      <form class="" action="?aktion=log" method="post">
        <input type="text" name="email" placeholder="E-Mail-Adresse" required>
        <input type="password" name="password" placeholder="Passwort" required><br/>
        <button type="submit" name="submit" class="button">Anmelden</button>
      </form>
    </div>
    <div class="p-vn">
      <a href="#">Passwort vergessen?</a>
    </div>
    <div class="line">
      <span>
        <hr class="before">
        oder
        <hr class="after">
      </span>
    </div>
    <div class="reg">
      <a href="?aktion=register">Neues Konto erstellen</a>
    </div>
  </main>

  <footer></footer>

  </body>
</html>
