<?php


class Controller{

  private $context = array();



  public function run($aktion){
    $this->$aktion();
    $this->generatePage($aktion);
  }

  private function generatePage($template){
      extract($this->context);
    require_once 'views/'.$template.".tpl.html";
  }
  private function addContext($key, $value){
    $this->context[$key] = $value;
  }

}


 ?>
