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
          <label for="vname">Vorname*:</label>
          <input type="text" name="vname" placeholder="Vorname" required>
        </div>
        <div class="inputfield">
          <label for="surname">Nachname*:</label>
          <input type="text" name="surname" placeholder="Nachname" required>
        </div>
        <div class="inputfield">
          <label for="password">Passwort*:</label>
          <input type="password" name="password" placeholder="Passwort" required>
        </div>
        <div class="inputfield">
          <label for="password-w">Passwort wiederholen*:</label>
          <input type="password" name="password-w" placeholder="Passwort wiederholen" required>
        </div>
        <div class="inputfield">
          <label for="mail">E-Mail*:</label>
          <input type="text" name="mail" placeholder="Email-Adresse" required>
       </div>
       <div class="inputfield">
         <label for="tel">Telefon*:</label>
         <input type="text" name="tel" placeholder="Telefonnummer" required>
       </div>
       <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
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
