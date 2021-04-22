function showResOfDate(date,user) {
    $.ajax({
     url: 'models/getReservierungenOfDate.php',
     data: {datum: date, benutzer: user},
     type: 'get',
     success: function(response){
        if(response != 0){
            document.getElementById('res').innerHTML = "";
            document.getElementById('res').innerHTML = response;
        }
     },
  });
}
