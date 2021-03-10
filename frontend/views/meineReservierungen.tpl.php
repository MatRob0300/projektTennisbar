<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/meineReservierungen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <select name="date" onchange="showResOfDate(this.value,<?php echo $_SESSION['userId'] ?>)">
        <option value=""></option>
        <?php foreach ($uDatums as $datum) { ?>
          <option value="<?php echo $datum->getDatum() ?>"><?php echo $datum->getDatum() ?></option>
        <?php } ?>
      </select>
      <button type="button" name="button" onclick="showResOfDate('mr',<?php echo $_SESSION['userId'] ?>)">alle Reservierungen</button>
      <div class="table-wrapper">
      <table class="fl-table" id="res"></table>
      </div>

      <script src="models/mr.js" type="text/javascript"></script>
  </body>
</html>
