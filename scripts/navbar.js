function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "obersteLeiste") {
    x.className += " responsive";
  } else {
    x.className = "obersteLeiste";
  }
}
