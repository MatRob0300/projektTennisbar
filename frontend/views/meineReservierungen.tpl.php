<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="tftable" border="1">
      <tr>
        <th>Platz</th>
        <th>Datum</th>
        <th>Uhrzeit</th>
      </tr>
      <?php foreach ($reservierungen as $reservierung) {?>
        <tr>
          <td><?php echo $reservierung->getPlatznummer() ?></td>
          <td><?php echo $reservierung->getDatum() ?></td>
          <td><?php echo $reservierung->getZeit() ?></td>
        </tr>
      <?php } ?>
    </table>


  </body>
</html>
