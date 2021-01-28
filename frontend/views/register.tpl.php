<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/register-styles.css">
    <title>Cheers Registrierung</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
        Registrierung
      </div>
      <div class="form">
        <div class="inputfield">
          <label for="fname">Vorname*:</label>
          <input type="text" name="fname" placeholder="Vorname">
        </div>
        <div class="inputfield">
          <label for="surname">Nachname*:</label>
          <input type="text" name="surname" placeholder="Nachname">
        </div>
        <div class="inputfield">
          <label for="password">Passwort*:</label>
          <input type="password" name="password" placeholder="Passwort">
        </div>
        <div class="inputfield">
          <label for="password-w">Passwort wiederholen*:</label>
          <input type="password" name="password-w" placeholder="Passwort wiederholen">
        </div>
        <div class="inputfield">
          <label for="mail">E-Mail*:</label>
          <input type="text" name="mail" placeholder="E-Mail-Adresse">
       </div>
       <div class="inputfield">
         <label for="tel">Telefon*:</label>
         <input type="text" name="tel" placeholder="">
       </div>
       <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>
       <div class="inputfield">
        <input type="submit" value="Register" class="btn">
        </div>
      </div>
    </div>
  </body>
</html>
