<?php
class Controller{

    private $context = array();


    public function run($aktion){
        $this->$aktion();
        $this->generatePage($aktion);
    }
    public function startseite(){
      $this->addContext("kommentare",Kommentar::findeAlle());
    }
    public function platzreservierung(){
    }
    public function wetterbericht(){

    }
    public function bar(){

    }
    public function ueberUns(){

    }
    public function login(){

    }
    public function log(){
        if (!empty($_POST [ "submit" ])) {
          $email = filter_var( $_POST [ "email" ], FILTER_SANITIZE_STRING );
          $password = filter_var( $_POST [ "passwort" ], FILTER_SANITIZE_STRING );
          $isLoggedIn = Benutzer::processLogin($email,$password);
        if(!$isLoggedIn) {
          $_SESSION [ "errorMessage" ] = "Ungültige Anmeldeinformationen" ;
          header("Location: index.php?aktion=login");
        }else{
          header("Location: index.php?aktion=startseite");
        }
      }
    }
    public function logout(){
      session_destroy ();
        header("Location: index.php");
    }

    public function register(){

    }
    public function reg(){
      $vname = $_POST['firstname'];
      $sname = $_POST['surname'];
      $mail = $_POST['email'];
      $pass = $_POST['password'];
      $passw = $_POST['w-password'];
      $pho = $_POST['tel'];
      if (isset($vname) && isset($sname) && isset($mail) && isset($pass) && isset($passw) && isset($pho)) {
        if ($pass == $passw) {
          if (is_numeric($pho) == 1) {
          $user = Benutzer::findeNachEmail($mail);
          if ($user == NULL) {
            $newBenutzer = new Benutzer(array("vorname"=>$vname,"nachname"=>$sname,"email"=>$mail,"passwort"=>$pass,"telefonnummer"=>$pho,"registiert"=>1,"email_token"=>NULL));
            $newBenutzer->speichere();
            //Function::send_bestaetigungsEmailReg($vname,$sname,$mail);
            header("Location: index.php?aktion=login");
          }else {
            $_SESSION['errorMessage'] = "Den Benutzer mit dieser Email existiert schon!";
            header("Location: index.php?aktion=register");
          }
        }else{
          $_SESSION['errorMessage'] = "Diese Telefonnummer ist nicht möglich!";
          header("Location: index.php?aktion=register");
        }
        }else {
          $_SESSION['errorMessage'] = "Passwörter stimmen nicht überein!";
          header("Location: index.php?aktion=register");
        }
      }
    }
    public function bewertungErstellen(){
        $this->addContext("benutzer",Benutzer::finde($_SESSION['userId']));
    }
    public function saveBewertung(){
      $datetime = date('d.m.Y').', '.date('H:i');
      $kommentar = new Kommentar(array("kname"=>$_POST['name'],"datum"=>$datetime,"text"=>$_POST['b_text'],"bewertung"=>$_POST['bewertung'],"benutzerid"=>$_REQUEST['benutzerid']));
      $kommentar->speichere();
      header("Location: index.php?aktion=startseite");
    }
    public function reservierungErstellen(){
      $this->addContext("reservierungen", Reservierung::findeAlle());
    }
    public function resErstellen(){
        $court = $_POST['court-s'];
        $date = $_POST['date'];
        $zeit = $_POST['times'];
        $reservierung = new Reservierung(array("platznummer"=>$court,"datum"=>$date,"zeit"=>$zeit,"benutzerid"=>$_SESSION['userId']));
        $reservierung->speichere();
        $_SESSION['errorMessageRes'] = "Erfolgreich reserviert";
        //Funktionen::send_bestaetigungsEmailRes();
        header("Location: index.php?aktion=reservierungErstellen");
    }



    private function generatePage($template){
        extract($this->context);
        require_once 'views/'.$template.".tpl.php";

    }
    private function addContext($key,$value){
      $this->context[$key] = $value;
    }
}

?>
