<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Administration</h1>
    </header>
    <div class="container">
    <select name="date" onchange="showAllOfUser(this.value)">
      <?php foreach ($allBen as $b) { ?>
        <option value="<?php echo $b->getBenutzerid() ?>"><?php echo $b->getVorname()." "; echo $b->getNachname(); ?></option>
      <?php } ?>
    </select>
    <button type="button" name="button" class="btn" onclick="showAllOfUser('all')">alle Benutzer</button>
    <a href="?aktion=newReservierung" name="button" class="btn">neue Reservierung</a>
    <div class="table-wrapper">
      <table class="fl-table" id="ben">
        <thead>
          <tr>
            <th>Nr.</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>E-Mail</th>
            <th>Telefonnummer</th>
            <th>Reservierungen</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allBen as $key => $ben) { ?>
            <tr>
              <td><?php echo ($key+1) ?></td>
              <td><?php echo $ben->getVorname() ?></td>
              <td><?php echo $ben->getNachname() ?></td>
              <td><?php echo $ben->getEmail() ?></td>
              <td><?php echo $ben->getTelefonnummer() ?></td>
              <td><button type="button" name="button" class="btn" onclick="showResOfUser(<?php echo $ben->getBenutzerid() ?>)">anzeigen</button></td>
            </tr>
        <?php  } ?>
        </tbody>
      </table>
    </div>

    <div class="table-wrapper">
    <table class="fl-table" id="res"></table>
    </div>
  </div>
    <script src="scripts/ares.js" type="text/javascript">

    </script>
  </body>
</html>
