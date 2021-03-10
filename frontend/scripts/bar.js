var modal = document.getElementById("myModal");

var gimg = document.getElementById("g-karte");
var spimg = document.getElementById("sp-karte");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
gimg.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
spimg.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}
