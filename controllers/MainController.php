<?php


class MainController {
    public function getHomepage(){
        require_once "views/homepage.view.php";
    }
    public function getLegalpage(){
        require_once "views/mentions-legales.view.php";
    }
}