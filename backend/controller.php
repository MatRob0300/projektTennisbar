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

  private function generatePage($template){
      extract($this->context);
    require_once 'views/'.$template.".tpl.php";
  }
  private function addContext($key, $value){
    $this->context[$key] = $value;
  }

}


 ?>
