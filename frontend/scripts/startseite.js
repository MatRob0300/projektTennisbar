//Tabs (Öffnungszeiten - Kontakt)
document.getElementById("defaultOpen").click();
  function openInfo(evt, infoName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(infoName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  //Map

  var map = L.map('mapid').setView([46.521202,11.2272281], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker([46.521202,11.2272281]).addTo(map);
  //.bindPopup("Hier sind wir!").openPopup();
  //tailwind CSS.org
    //map.locate({setView: true, maxZoom: 16});
    function showAllOfBewertungen(){
        $.ajax({
         url: 'models/getBewertungen.php',
         //data: {datum: formattedDate, platznummer: pN},
         type: 'get',
         success: function(response){
           console.log("resp " + response);
            if(response != 0){
                document.getElementById('flex-container').innerHTML = response;
                var myobj = document.getElementById("ml");
                myobj.innerHTML = "weniger laden";
                myobj.setAttribute("onclick","showOnlyFourBewertungen()");
            }
         },
      });
    }

    //bewertungen
    function showOnlyFourBewertungen() {
      $.ajax({
       url: 'models/removeBewertungen.php',
       //data: {datum: formattedDate, platznummer: pN},
       type: 'get',
       success: function(response){
         console.log("resp" + response);
          if(response != 0){
            var myNode = document.getElementById("flex-container");
            myNode.innerHTML = '';
              document.getElementById('flex-container').innerHTML = response;
              var myobj = document.getElementById("ml");
              myobj.innerHTML = "mehr laden";
              myobj.setAttribute("onclick","showAllOfBewertungen()");
          }
       },
    });
    }
