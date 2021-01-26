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
    public function bewertungErstellen(){
        $this->addContext("benutzer",Benutzer::finde(1));
    }
    public function saveBewertung(){
      echo $_POST['bewertung'];
      $datetime = date('d.m.Y').', '.date('H:i');
      $kommentar = new Kommentar(array("kname"=>$_POST['name'],"datum"=>$datetime,"text"=>$_POST['b_text'],"bewertung"=>$_POST['bewertung'],"benutzer_benutzerid"=>$_REQUEST['benutzerid']));
      $kommentar->speichere();
      header("Location: index.php?aktion=startseite");
    }
    public function reservierungErstellen(){
      $this->addContext("reservierungen", Reservierung::findeAlle());
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
