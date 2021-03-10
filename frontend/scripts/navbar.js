window.onscroll = function() {
  myFunction()};
var header = document.getElementById("header");
var navbar = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
