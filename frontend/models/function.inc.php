<?php
function check($mail, $pass){
  
}
function check_login($mail, $pass) {
    $user = Benutzer::findeAlle();
    foreach ($user as $usr) {
        if ($usr->getEmail() == $mail && password_verify($pass,$usr->getPasswort())) {
            return true;
        }
    }
    return false;
}

?>
