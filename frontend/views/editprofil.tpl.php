<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/editprofil-styles.css">
  </head>
  <body>
    <main>
      <div class="zurueck">
        <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
      </div>
      <div class="content">
          <h1>Profil bearbeiten</h1>
        </div>
        <div class="background-white p20 mb30">
          <h3 class="page-title t-h3">
            Benutzer
          </h3>
          <div class="row">
            <div class="form-group col-sm-6">
              <label>Vorname</label>
              <input type="text" name="vname" class="form-control" value="<?php echo $benutzer->getVorname() ?>" placeholder="Vorname" required readonly>
            </div>

            <div class="form-group col-sm-6">
              <label>Nachname</label>
              <input type="text" name="nname" class="form-control" value="<?php echo $benutzer->getNachname() ?>" placeholder="Nachname" required readonly>
            </div>
          </div>
        </div>
        <form action="?aktion=updateProfilKontaktInfo" method="post">
        <div class="background-white p20 mb30">
          <h3 class="page-title t-h3">
            Kontakt
            <input type="submit" name="submit" id="k-i" class="btn btn-primary btn-xs pull-right" value="speichern" title="speichern" disabled>
            <button type="button" name="button" id="k-b" class="btn btn-primary btn-xs pull-right but" title="bearbeiten" onclick="kon()">bearbeiten</button>
          </h3>

          <div class="row">
            <div class="form-group col-sm-6">
              <label>E-mail</label>
              <input type="email" name="mail" class="form-control" id="in-k1" value="<?php echo $benutzer->getEmail() ?>" placeholder="E-Mail" required disabled>
            </div>

            <div class="form-group col-sm-6">
              <label>Telefonnummer</label>
              <input type="text" name="tel" class="form-control" id="in-k2" value="<?php echo $benutzer->getTelefonnummer() ?>" placeholder="Telefonnummer" required disabled>
            </div>
          </div>
        </div>
        <?php
        if(isset($_SESSION["errorMessageKI"])) {
          ?>
          <div class="error-message"><?php  echo $_SESSION["errorMessageKI"]; ?></div>
          <?php
          unset($_SESSION["errorMessageKI"]);
        }
        ?>
        </form>
        <form action="?aktion=updateProfilPasswort" method="post">
        <div class="background-white p20 mb30">
          <h3 class="page-title">
            Passwort
            <input type="submit" name="submit" id="p-i" class="btn btn-primary btn-xs pull-right" value="speichern" title="speichern" disabled>
            <button type="button" name="button" id="p-b" class="btn btn-primary btn-xs pull-right but" title="bearbeiten" onclick="password()">bearbeiten</button>
          </h3>
          <div class="row">
            <div class="form-group col-sm-6">
              <label>neues Passwort</label>
              <input type="password" name="pass" id="in-p1" class="form-control" value="" placeholder="neues Passwort" required disabled>
            </div>

            <div class="form-group col-sm-6">
              <label>neues Passwort wiederholen</label>
              <input type="password" name="pass-w" id="in-p2" class="form-control" value="" placeholder="neues Passwort wiederholen" required disabled>
            </div>

          </div>
          <?php
          if(isset($_SESSION["errorMessagePI"])) {
            ?>
            <div class="error-message"><?php  echo $_SESSION["errorMessagePI"]; ?></div>
            <?php
            unset($_SESSION["errorMessagePI"]);
          }
          ?>
        </div>
        </form>
      </div>
    </main>
    <?php require_once 'views/footer.php'; ?>
    <script src="scripts/editprofil.js" type="text/javascript"></script>
  </body>
</html>
