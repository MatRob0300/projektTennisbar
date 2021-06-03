<?php


class Controller{

  private $context = array();

  public function run($aktion){
    $this->$aktion();
    $this->generatePage($aktion);
  }
  public function hauptpanel(){
    $this->addContext("allBen",Benutzer::findeAlle());
  }
  public function loescheReservierung(){
    $reservierung = Reservierung::finde($_GET['reservierungid']);
    $reservierung->loesche();
    header("Location: index.php?aktion=hauptpanel");
  }
  public function newReservierung(){
    $this->addContext("allBen",Benutzer::findeAlle());
  }
  public function resErstellen(){
      $court = $_POST['court-s'];
      $date = $_POST['date'];
      $zeit = $_POST['times'];
      $benutzerid = $_POST['benutzerid'];
      $reservierung = new Reservierung(array("platznummer"=>$court,"datum"=>$date,"zeit"=>$zeit,"benutzerid"=>$benutzerid));
      $reservierung->speichere();
      //Funktionen::send_bestaetigungsEmailRes();
      header("Location: index.php?aktion=newReservierung");
  }
  public function benutzerErstellen(){
    $vname = $_POST['vname'];
    $sname = $_POST['nname'];
    $mail = $_POST['mail'];
    $pass =
    $pho = $_POST['tel'];
    if (isset($vname) && isset($sname) && isset($mail) && isset($pass) && isset($passw) && isset($pho)) {
        if (is_numeric($pho) == 1) {
        $user = Benutzer::findeNachEmail($mail);
        if ($user == false) {
          $newBenutzer = new Benutzer(array("vorname"=>$vname,"nachname"=>$sname,"email"=>$mail,"passwort"=>$pass,"telefonnummer"=>$pho,"registiert"=>1,"email_token"=>NULL));
          $newBenutzer->speichere();
          //Function::send_bestaetigungsEmailReg($vname,$sname,$mail);
        }
      }
    }
    header("Location: index.php?aktion=newReservierung");
  }

  private function generatePage($template){
      extract($this->context);
    require_once 'views/'.$template.".tpl.php";
  }
  private function addContext($key, $value){
    $this->context[$key] = $value;
  }

}


 ?>
