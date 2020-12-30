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
    public function wetterbericht(){

    }
    public function bar(){

    }
    public function ueberUns(){

    }
    public function login(){

    }
    public function register(){

    }
    public function bewertungErstellen(){

    }




    private function generatePage($template){
        extract($this->context);
        require_once 'views/'.$template.".tpl.php";

    }
}

?>
