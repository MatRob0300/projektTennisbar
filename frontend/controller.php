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
          if ($user == false) {
            $newBenutzer = new Benutzer(array("vorname"=>$vname,"nachname"=>$sname,"email"=>$mail,"passwort"=>$pass,"telefonnummer"=>$pho,"registiert"=>1,"email_token"=>NULL));
            $newBenutzer->speichere();
            //Function::send_bestaetigungsEmailReg($vname,$sname,$mail);
            header("Location: index.php?aktion=login");
          }else{
              $_SESSION['errorMessage'] = "Den Benutzer mit dieser E-Mail-Adresse existiert schon!";
              header("Location: index.php?aktion=register");
            }
          }else {
            $_SESSION['errorMessage'] = "Diese Telefonnummer existiert nicht!";
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
        header("Location: index.php?aktion=platzreservierung");
    }
    public function meineReservierungen(){
      $this->addContext("reservierungen",Reservierung::findeAlleNachBenutzer(Benutzer::finde($_SESSION['userId'])));
      $this->addContext("uDatums",Reservierung::findeAlleUnabgelaufenDatumVonBenutzer(Benutzer::finde($_SESSION['userId'])));
      $this->addContext("zeitAn",Reservierung::getAnzahlVerfuegbareZeitenHeute());
    }
    public function presetSemail(){

    }
    public function editprofil(){
      $this->addContext("benutzer",Benutzer::finde($_SESSION['userId']));
      $this->addContext("benutzers",Benutzer::finde(5));
    }
    public function updateProfilKontaktInfo(){
      if (isset($_POST['submit'])) {
        if (isset($_POST['mail']) && isset($_POST['tel'])) {
          $dopMail = Benutzer::findeNachEmail($_POST['mail']);
          $userMail = Benutzer::finde($_SESSION['userId']);
          if ($dopMail == false || $userMail->getEmail() == $_POST['mail']) {
            $altBenutzer = Benutzer::finde($_SESSION['userId']);
            $altBenutzer->setEmail($_POST['mail']);
            $altBenutzer->setTelefonnummer($_POST['tel']);
            $altBenutzer->speichere();
            header("Location: index.php?aktion=editprofil");
          } else {
            $_SESSION['errorMessageKI'] = "Fehlgeschlagen, diese E-Mail existiert schon!";
            header("Location: index.php?aktion=editprofil");
          }
        }
      }
    }
    public function updateProfilPasswort(){
      if (isset($_POST['submit'])) {
        if (isset($_POST['pass']) && isset($_POST['pass-w'])) {
          if ($_POST['pass'] == $_POST['pass-w']) {
            $altBenutzer = Benutzer::finde($_SESSION['userId']);
            $altBenutzer->setPasswort($_POST['pass']);
            $altBenutzer->speichere();
            header("Location: index.php?aktion=editprofil");
          } else {
            $_SESSION['errorMessagePI'] = "Fehlgeschlagen, die Passwörter stimmen nicht überein!";
            header("Location: index.php?aktion=editprofil");
          }
        }
      }
    }
    public function speisekarte(){

    }
    public function checkMailForPassReset(){
      if (isset($_POST['mt'])) {
        $benutzer = Benutzer::findeNachEmail($_POST['mt']);
        if ($benutzer != false) {
          $mail = $benutzer->getEmail();
          //send_PasswordResetEmail($mail);
          $_SESSION['errorMessagePassReset'] = "Ihnen wurde eine E-Mail zugesendet! <a href='models/send_PasswordResetEmail(".$mail.")'>erneut senden</a>";
          //$_SESSION['errorMessagePassReset'] = "Ihnen wurde eine E-Mail zugesendet! <a href='#'>erneut senden</a>";
          header("Location: index.php?aktion=presetSemail");
        }else {
          $_SESSION['errorMessagePassReset'] = "Entschuldigung, wir konnten die eingegebenen E-Mail-Adresse nicht finden!";
          header("Location: index.php?aktion=presetSemail");
        }
      }
    }
    public function loescheReservierung(){
      $reservierung = Reservierung::finde($_GET['reservierungid']);
      $reservierung->loesche();
      header('Location: index.php?aktion=meineReservierungen');
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
