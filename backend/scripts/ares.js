function showResOfUser(user) {
    $.ajax({
     url: 'models/getSearchRes.php',
     data: {benutzer: user},
     type: 'get',
     success: function(response){
        if(response != 0){
            document.getElementById('res').innerHTML = "";
            document.getElementById('res').innerHTML = response;
        }
     },
  });
}
function showAllOfUser(user) {
    $.ajax({
     url: 'models/getSearchUser.php',
     data: {benutzer: user},
     type: 'get',
     success: function(response){
        if(response != 0){
            document.getElementById('ben').innerHTML = "";
            document.getElementById('ben').innerHTML = response;
        }
     },
  });
}
function newBenutzer(){
  
}
