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
      $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
      if (isset($pass) && isset($mail)) {
        $benutzern = Benutzer::findeAlle();
        foreach ($benutzern as $benutzer) {
          if ($benutzer->getEmail() == $mail && password_verify($benutzer->getPasswort(),$pass)) {
            header("Location: index.php?aktion=startseite");
          }else {
            header("Location: index.php?aktion=login");
          }
        }

      }
    }
    public function register(){

    }
    public function reg(){
      $vname = $_POST['name'];
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
      $kommentar = new Kommentar(array("kname"=>$_POST['name'],"datum"=>$datetime,"text"=>$_POST['b_text'],"bewertung"=>$_POST['bewertung'],"benutzer_benutzerid"=>$_REQUEST['benutzerid']));
      $kommentar->speichere();
      header("Location: index.php?aktion=startseite");
    }
    public function reservierungErstellen(){
      $this->addContext("reservierungen", Reservierung::findeAlle());
    }
    public function searchForTimes(){
      $court = $_POST['court-s'];
      $date = $_POST['date'];
      $formData = "hallo";//Reservierung::findeNachDatumVonPlatz($date, $court);
      $this->addContext("TestVariable",$formData);
      $this->addContext("template",'reservierungErstellen');
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
