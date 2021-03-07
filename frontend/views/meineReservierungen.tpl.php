<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/meineReservierungen.css">
  </head>
  <body>
    <table>
  <tr>
    <th>Nr.</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <?php foreach ($reservierungen as $reservierung) {?>
    <tr>
      <td><?php echo $reservierung->getPlatznummer(); ?></td>
      <td><?php echo $reservierung->getDatum(); ?></td>
      <td><?php echo $reservierung->getZeit(); ?></td>
    </tr>
  <?php} ?>

</table>
  </body>
</html>
