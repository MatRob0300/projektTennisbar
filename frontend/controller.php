<?php
class Controller{

    private $context = array();


    public function run($aktion){
        $this->$aktion();
        $this->generatePage($aktion);
    }
    public function startseite(){

    }
    public function platzreservierung(){

    }




    private function generatePage($template){
        extract($this->context);
        require_once 'views/'.$template.".tpl.php";

    }
}

?>
