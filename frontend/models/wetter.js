/*let url = 'https://api.openweathermap.org/data/2.5/weather?q=Bozen,it&units=metric&APPID=1d3c3cf9a55237a528ec15dafe5065a3&lang=de';

   fetch(url)
   .then(res => res.json())
   .then((out) => {
     var maxtemp = out['main']['temp_max'];
     var description = out['weather'][0]['description'];
     var wi1 = "http://openweathermap.org/img/wn/";
     var wi2 = "@2x.png";
     var weathericon = out['weather'][0]['icon'];
     var weatheralt = out['weather'][0]['main'];
       document.getElementById("weather-description").innerHTML = description;
       document.getElementById("temp-icon").src = wi1.concat(weathericon, wi2);
       document.getElementById("temp-icon").alt = weatheralt;
       document.getElementById("temp-value").innerHTML = maxtemp;
     console.log('Checkout this JSON! ', out);
   })
   .catch(err => { throw err });*/
