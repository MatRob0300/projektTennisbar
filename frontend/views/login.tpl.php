<html>
  <head>
    <title>Benutzer Login</title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/login-styles.css"/>
  </head>
  <body>
    <div>
      <form action="index.php?aktion=log" method="post" id="frmLogin" onSubmit="return validate();">
        <div class="demo-table">
          <div class="form-head">
            <div class="zurueck">
              <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
            </div>
              <h1>Login</h1>
            </div>
            <?php
            if(isset($_SESSION["errorMessage"])) {
              ?>
              <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
              <?php
              unset($_SESSION["errorMessage"]);
            }
            ?>
            <div class="field-column">
              <div>
                <label for="username">Email:</label>
              </div>
              <div>
                <input name="email" type="email" class="demo-input-box">
              </div>
            </div>
            <div class="field-column">
              <div>
                <label for="password">Passwort:</label>
              </div>
              <div>
                <input name="passwort" id="password" type="password" class="demo-input-box">
              </div>
            </div>
            <div class=field-column>
              <div>
                <input type="submit" name="submit" value="Login" class="btnLogin">
              </div>
            </div>
            <div class="p-vn">
              <a href="index.php?aktion=presetSemail">Passwort vergessen?</a>
            </div>
            <div class="line">
              <span><hr class="before">oder<hr class="after"></span>
            </div>
            <div class="reg">
              <a href="?aktion=register">Neues Konto erstellen</a>
            </div>
          </div>
        </form>
      </div>
    </body>
  </html>
