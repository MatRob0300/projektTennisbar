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
      $mail = $_POST['email'];
      $pass = $_POST['password'];
      if (isset($pass) && isset($mail)) {
        $benutzer = Benutzer::findeNachEmail($mail);
        if ($benutzer != NULL) {
          if ($benutzer->getEmail() == $mail && $benutzer->getPasswort() == $pass) {
            header("Location: index.php?aktion=startseite");
          }else {
            header("Location: index.php?aktion=login");
          }
        }else {
          header("Location: index.php?aktion=login");
        }
      }
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
          $db_benutzer = Benutzer::findeAlle();
          foreach ($db_benutzer as $user):
            if ($user->getEmail() != $mail && $user->getTelefonnummer() != $pho) {
              $benutzer = new Benutzer(array("vorname"=>$vname,"nachname"=>$sname,"email"=>$mail,"passwort"=>$pass,"telefonnummer"=>$pho,"registriert"=>1));
              $benutzer->speichere();

            }
          endforeach;
        }
      }
      header("Location: index.php?aktion=login");
    }
    public function bewertungErstellen(){
        $this->addContext("benutzer",Benutzer::finde(1));
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
      $reservierung = new Reservierung(array("platznummer"=>$court,"datum"=>$date,"zeit"=>$zeit,"benutzerid"=>1));
      $reservierung->speichere();
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
