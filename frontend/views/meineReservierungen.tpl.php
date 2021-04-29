<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/meineReservierungen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="zurueck">
      <a href="?aktion=startseite"><img src="images/zurueck-pfeil.png" alt="zurueck-pfeil"></a>
    </div>
    <header>
      <h1>Meine Reservierungen</h1>
    </header>
      <div class="container">
        <select name="date" onchange="showResOfDate(this.value,<?php echo $_SESSION['userId'] ?>)">
          <?php foreach ($uDatums as $datum) { ?>
            <option value="<?php echo $datum->getDatum(); ?>"><?php echo $datum->getDatum(); ?></option>
          <?php } ?>
        </select>
        <button type="button" name="button" class="btn" onclick="showResOfDate('all',<?php echo $_SESSION['userId'] ?>)">alle Reservierungen</button>
        <button type="button" name="button" class="btn" onclick="showResOfDate('heu',<?php echo $_SESSION['userId'] ?>)">heute</button>
        <div class="table-wrapper">
        <table class="fl-table" id="res">
          <thead>
            <tr>
              <th>Nr.</th>
              <th>Platz</th>
              <th>Datum</th>
              <th>Zeit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($bDatums as $key => $dates) { ?>
              <tr>
                <td><?php echo ($key+1) ?></td>
              <?php if ($dates->getPlatznummer() == 1) { ?>
                <td>Platz A</td>
              <?php  } else { ?>
                <td>Platz B</td>
              <?php  } ?>
                <td><?php echo $dates->getDatum() ?></td>
                <td><?php echo $dates->getZeit() ?></td>
                <td><a href='?aktion=loescheReservierung&reservierungid=<?php echo $dates->getReservierungid() ?>'>löschen<a></td>
              </tr>
          <?php  } ?>
          </tbody>
        </table>
        </div>
      </div>
      <?php require_once 'views/footer.php'; ?>


      <script src="scripts/mr.js" type="text/javascript"></script>
  </body>
</html>
