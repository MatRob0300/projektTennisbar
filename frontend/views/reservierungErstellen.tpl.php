<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title><!--https://www.eyecon.ro/datepicker/#about
    https://medium.com/@nitinpatel_20236/challenge-of-building-a-calendar-with-pure-javascript-a86f1303267d --></title>
    <link rel="stylesheet" type="text/css" href="styles/reservierung-erstellen-styles.css">
  </head>
  <body onload="renderDate()">
    <div class="container">
      <div class="c-l">

        <div class="wrapper">
          <div class="calendar">
            <div class="month">
              <div class="prev" onclick="moveDate('prev')">
                  <span>&#10094;</span>
              </div>
              <div>
                  <h2 id="month"></h2>
              </div>
              <div class="next" onclick="moveDate('next')">
                  <span>&#10095;</span>
              </div>
            </div>
            <div class="weekdays">
              <div>So</div>
              <div>Mo</div>
              <div>Di</div>
              <div>Mi</div>
              <div>Do</div>
              <div>Fr</div>
              <div>Sa</div>
            </div>
            <div class="days">

            </div>
          </div>
        </div>
        
      </div>
      <div class="c-r">

      </div>
    </div>



  <script src="models/re.js" type="text/javascript"></script>
  </body>
</html>
