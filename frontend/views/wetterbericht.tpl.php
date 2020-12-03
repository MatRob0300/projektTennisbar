<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
    <link rel="stylesheet" type="text/css" href="styles/wetterbericht-styles.css"/>
    <title>Wetterbericht Andrian</title>
  </head>
  <body>
    <div class="obersteLeiste">
      <div class="logo">
        <a href="?aktion=startseite"><img src="images/cheersLogo.png" alt="cheers-logo" title="Startseite"></a>
      </div>
      <div class="titelUntertitel">
        <h1>Cheers</h1>
        <h2>Tennisbar Andrian</h2>
      </div>
      <div class="reglog">
        <a href="#"><img src="images/profilIcon.png" alt="profil-icon" title="Anmelden"></a>
      </div>
      <nav>
        <a href="?aktion=startseite">Startseite</a>
        <a href="#">Bar</a>
        <a href="?aktion=wetterbericht">Wetter</a>
        <a href="?aktion=platzreservierung">Tennisplatz</a>
        <a href="#">Über uns</a>
      </nav>
    </div>
    <header>
      <div class="headertext">
        <h1>Wetter</h1>
      </div>
    </header>
    <main>
      
      <!--<a class="weatherwidget-io" id="wetter" href="https://forecast7.com/de/46d5211d23/andrian/" data-label_1="ANDRIAN" data-label_2="Wetter" data-icons="Climacons Animated" data-theme="weather_one" >ANDRIAN Wetter</a>
      <div class="karte">
        <img src="images/southtyrol.svg" usemap="#image-map">
         https://www.image-map.net/

        <map name="image-map">
            <area target="" alt="" title="" href="#" coords="243,259,248,265,252,274,250,286,249,297,250,306,246,316,245,326,246,333,241,342,236,351,230,357,234,364,243,368,239,378,245,384,253,386,262,378,269,370,277,364,282,357,290,354,295,362,303,364,305,357,299,348,307,344,313,339,323,340,328,328,324,321,316,319,304,312,296,311,284,302,282,293,276,282,275,272,268,262,259,261,251,256" shape="poly">
            <area target="" alt="" title="" href="#" coords="289,303,294,299,299,290,304,283,313,283,308,275,308,266,304,260,297,258,293,250,286,255,280,259,271,262,274,268,277,274,277,283,281,289,283,297" shape="poly">
            <area target="" alt="" title="" href="#" coords="401,215,389,218,384,226,390,232,399,238,398,247,400,256,409,260,421,260,430,252,439,252,443,258,455,252,463,248,475,247,481,243,489,245,496,243,501,231,506,222,508,209,512,199,515,190,508,185,503,178,512,172,500,169,486,172,483,162,475,156,468,158,456,159,445,163,438,169,434,180,428,190,434,201,427,211,413,218" shape="poly">
            <area target="" alt="" title="" href="#" coords="315,316,326,320,337,323,353,327,358,319,366,313,371,304,374,288,381,275,384,265,395,261,402,256,398,245,395,235,386,230,380,225,366,224,352,222,341,226,329,219,322,209,316,201,315,193,323,186,336,175,341,161,336,146,334,136,324,127,314,126,304,132,293,135,282,142,276,154,270,167,273,180,272,192,274,204,268,214,260,220,249,227,251,236,252,246,251,254,259,258,269,261,280,255,289,250,296,255,307,262,311,276,310,282,303,287,298,295,292,301,292,309,303,311" shape="poly">
            <area target="" alt="" title="" href="#" coords="337,145,338,156,340,167,334,175,327,185,320,191,314,199,320,211,328,219,337,226,353,222,370,224,381,226,390,217,405,214,414,217,427,208,428,195,429,180,437,171,436,156,427,143,419,136,406,132,393,126,394,110,388,97,380,88,374,77,362,85,365,93,365,106,363,115,369,122,377,137,370,144,358,145,348,144" shape="poly">
            <area target="" alt="" title="" href="#" coords="115,269,117,279,129,285,141,286,149,282,159,284,170,276,178,267,188,272,193,281,198,285,207,286,207,275,199,261,202,251,211,251,216,259,222,267,237,264,246,256,253,249,251,232,251,224,261,218,273,208,274,195,273,178,273,160,279,146,288,137,301,131,291,117,275,113,260,110,248,100,248,83,241,71,229,71,220,78,217,89,213,100,210,112,210,122,200,129,193,142,192,152,185,158,176,168,185,174,175,181,165,186,171,196,175,205,175,212,176,223,170,228,157,235,142,242,132,248,124,255" shape="poly">
            <area target="" alt="" title="" href="#" coords="114,267,103,271,92,279,74,283,60,277,44,266,31,261,21,253,22,240,28,226,30,214,24,203,13,197,6,198,1,185,4,174,9,163,6,153,14,149,16,137,17,125,24,110,27,104,37,104,49,107,56,108,65,103,77,100,88,95,93,101,99,112,110,117,110,123,104,131,112,136,122,131,128,138,137,138,147,144,154,142,167,141,182,142,193,142,194,151,185,155,177,164,181,174,176,181,166,186,168,199,172,204,174,212,174,220,163,229,147,235,129,246,125,253" shape="poly">
            <area target="" alt="" title="" href="#" coords="239,67,248,55,264,56,275,50,291,49,300,51,309,56,324,56,329,43,346,41,352,50,368,43,377,40,392,44,407,49,414,56,403,61,389,69,378,73,371,78,364,86,364,96,365,108,369,118,376,130,376,143,363,146,350,144,339,144,331,136,325,127,313,124,305,131,294,125,283,111,264,110,248,103,246,88,246,76" shape="poly">
            <area target="" alt="" title="" href="#" coords="404,63,384,69,377,76,381,89,391,98,394,111,393,123,400,130,413,130,424,135,432,145,436,154,440,163,453,158,471,157,482,156,488,166,502,172,508,181,520,189,529,198,540,203,548,209,552,220,558,213,570,208,576,210,591,208,602,208,609,204,616,195,627,189,638,184,624,178,610,169,605,154,597,141,587,136,575,133,579,120,585,111,578,96,565,90,557,94,550,86,542,80,543,67,535,58,532,45,533,34,541,30,552,30,557,20,560,7,553,1,544,2,531,5,519,8,512,14,499,18,486,21,469,25,456,35,436,47,424,47,417,53" shape="poly">
        </map>
      </div>
    -->


    </main>
    <aside>
      <div class="side-box">
        <div class="side-box-header">
          <h2>Suche</h2>
        </div>
        <div class="suchleiste">
          <input type="searchbox" />
          <button type="button">SUCHEN</button>
        </div>
      </div>
      <div class="side-box">
        <div class="side-box-header">
          <h2>Info</h2>
        </div>
        <div class="info">
          <div class="texticon">
            <h1>&#9982;</h1>
          </div>
          <div class="textinfo">
            <h2>Bar</h2>
            <a href="#">zur Bar</a>
          </div>
        </div>
        <div class="info">
          <div class="texticon">
            <h1>&#9977;</h1>
          </div>
          <div class="textinfo">
            <h2>Tennis</h2>
            <a href="?aktion=platzreservierung">zur Platzreservierung</a>
          </div>
        </div>
      </div>
    </aside>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
    <script>
    function myFunction() {
      alert("You clicked the coffee cup!");
    }
    </script>

  </body>
</html>
