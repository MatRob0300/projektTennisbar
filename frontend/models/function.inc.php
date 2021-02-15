<?php
class Funktionen{


    public static function send_bestaetigungsEmailRes(){
        require_once 'PHPMailer-master/src/PHPMailer.php';
        if (isset($_SESSION['userId'])) {
          $benutzerid = $_SESSION['userId'];
        }
        $benutzer = Benutzer::finde($benutzerid);

        $subject = strip_tags(''); //email titel
        $message = strip_tags($_POST['message']);//$_POST['message']

            $mailer = new \PHPMailer\PHPMailer\PHPMailer();
            $mail = $benutzer->getEmail();

            $to = strip_tags($mail);

            $mailer->From = "sekretariat@berufsschule.bz";
            $mailer->FromName = "Cheers Tennisbar Andrian";
            $mailer->addAddress($to, $benutzer->getVorname() . " " . $benutzer->getNachname());
            $mailer->Subject = $subject;
            $mailer->CharSet = "UTF-8";
            //$mailer->Body = $message . "\n \n Anmeldung ändern unter:\n " . M_URL . "/" . M_URLUNTERORDNER . "/index.php?token=" . $teilnehmer->getToken() . "&aktion=login";

    }

    public static function send_bestaetigungsEmailReg($vname,$sname,$mail){
        require_once 'PHPMailer-master/src/PHPMailer.php';

        $subject = strip_tags('Registrierung bei Cheers Tennisbar Andrian'); //email titel
        $message = strip_tags();//$_POST['message']

            $mailer = new \PHPMailer\PHPMailer\PHPMailer();

            $to = strip_tags($mail);

            $mailer->From = "sekretariat@berufsschule.bz";
            $mailer->FromName = "Cheers Tennisbar Andrian";
            $mailer->addAddress($to, $vname . " " . $sname);
            $mailer->Subject = $subject;
            $mailer->CharSet = "UTF-8";
            //$mailer->Body = $message . "\n \n Anmeldung ändern unter:\n " . M_URL . "/" . M_URLUNTERORDNER . "/index.php?token=" . $teilnehmer->getToken() . "&aktion=login";

            /*if (!$mailer->send()) {
                $_SESSION["Info_mail"] = "Fehler beim versenden ihrer Email!";
            } else {
                $_SESSION["Info_mail"] = "Deine Email wurde erfolgreich versendet!";
            }*/
    }
}
?>
