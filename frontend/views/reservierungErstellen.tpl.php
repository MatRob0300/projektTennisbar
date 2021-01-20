<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title><!--https://www.cssscript.com/calendar-date-picker/--></title>
    <link rel="stylesheet" type="text/css" href="styles/reservierung-erstellen-styles.css">
  </head>
  <body>
    <div class="container">
      
      <div class="c-l">

        	<div class="wrapper">
            <div class="container-calendar">
        			<div class="button-container-calendar">
        				<button id="previous">&#8249;</button>
        				<button id="next">&#8250;</button>
        				<h3 id="monthHeader"></h3>
        				<p id="yearHeader"></p>
        			</div>

        			<table class="table-calendar" id="calendar">
        				<thead id="thead-month"></thead>
        				<tbody id="calendar-body"></tbody>
        			</table>

        			<div class="footer-container-calendar">
        				<label for="month">Jump To: </label>
        				<select id="month">
        					<option value=0>Jan</option>
        					<option value=1>Feb</option>
        					<option value=2>Mär</option>
        					<option value=3>Apr</option>
        					<option value=4>Mai</option>
        					<option value=5>Jun</option>
        					<option value=6>Jul</option>
        					<option value=7>Aug</option>
        					<option value=8>Sep</option>
        					<option value=9>Okt</option>
        					<option value=10>Nov</option>
        					<option value=11>Dez</option>
        				</select>
        				<select id="year"></select>
        			</div>
        			<p id="date-picked"></p>
        		</div>
        	</div>
      </div>
      <div class="c-r">

      </div>
    </div>



  <script src="models/re.js" type="text/javascript"></script>
  </body>
</html>
