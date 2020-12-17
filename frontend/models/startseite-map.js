var map = L.map('mapid').setView([46.521202,11.2272281], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([46.521202,11.2272281]).addTo(map);
//.bindPopup("Hier sind wir!").openPopup();
//tailwind CSS.org
  //map.locate({setView: true, maxZoom: 16});
