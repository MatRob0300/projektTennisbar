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
    <header>
      <h1>Meine Reservierungen</h1>
    </header>
    <div class="row">

			     <div class="panel panel-back noti-box">
             <div class="icon-box bg-color-red set-icon"></div>
              <div class="text-box">
                <p class="main-text">120</p>
                <p class="text-muted">HEUTE</p>
              </div>
            </div>
			     <div class="panel panel-back noti-box">
              <div class="icon-box bg-color-green set-icon"></div>
              <div class="text-box" >
                <p class="main-text">30</p>
                <p class="text-muted">AUSSTEHEND</p>
              </div>
            </div>
			      <div class="panel panel-back noti-box">
              <div class="icon-box bg-color-blue set-icon"></div>
              <div class="text-box" >
                <p class="main-text">340</p>
                <p class="text-muted">GESAMT</p>
              </div>
            </div>
		     </div>
      <div class="container">
        <!--<button type="button" name="button" onclick="showResOfDate('mr',<?php //echo $_SESSION['userId'] ?>)">alle Reservierungen</button>-->
        <div class="table-wrapper">
          <table class="fl-table" id="res"></table>
        </div>
      </div>

      <script src="scripts/mr.js" type="text/javascript"></script>
  </body>
</html>
