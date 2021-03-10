<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/navbar-styles.css">
    <title></title>
  </head>
  <body>
    <div id="navbar" class="obersteLeiste">
      <div class="logo">
        <a href="?aktion=startseite"><img src="images/logo.png" alt="cheers-logo" title="Startseite"></a>
      </div>
      <div class="titelUntertitel">
        <h1>Cheers</h1>
        <h2>Tennisbar Andrian</h2>
      </div>
        <?php
        if(!isset($_SESSION["loggedIn"])){
          echo "<div class='regbutton'>";
          echo "<a href='?aktion=login'><img src='images/profilIcon.png' alt='login-icon' title='Anmelden'></a>";
          echo "</div>";
        }else{
          echo "<div class='regbutton'>";
          echo "<div class='dropdown'>";
          echo "<button><img src='images/logout.png'></button>";
          echo "<div class='dropdown-content'>";
          echo "<a href='?aktion=editprofil'>Mein Profil</a>";
          echo "<a href='?aktion=meineReservierungen'>Meine Reservierungen</a>";
          echo "<a href='?aktion=logout'>Abmelden</a>";
          echo "</div></div></div>";
        }?>
      <nav>
        <a href="?aktion=startseite">Startseite</a>
        <a href="?aktion=bar">Bar</a>
        <a href="?aktion=wetterbericht">Wetter</a>
        <a href="?aktion=platzreservierung">Tennisplatz</a>
        <a href="?aktion=ueberUns">Über uns</a>
      </nav>
    </div>
  </body>
</html>
