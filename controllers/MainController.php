<?php
require_once "Utils/Security.class.php";

class MainController {
    public function getHomepage(){
        require_once "views/homepage.view.php";
    }

    public function getWebsitePage(){
        require_once "views/website-page.view.php";
    }
    public function getWebAppPage(){
        require_once "views/web-app-page.view.php";
    }
    public function getMobileAppPage(){
        require_once "views/mobile-app-page.view.php";
    }
    
    public function getLegalpage(){
        require_once "views/mentions-legales.view.php";
    }



    public function sendMessage(){

$errors = [];

if (!empty($_POST)) {
   $email = Security::secureHTML($_POST['email']);
   $subject = Security::secureHTML($_POST['subject']);
   $text = Security::secureHTML($_POST['message']);
   
$to = "contact@tomajune.com";
$message = $email . " vous a envoyé ce message :" . "\n\n" . $text;


$headers[] = "From: no-reply@juunee-concept.com";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

mail($to, $subject, $message, implode("\r\n", $headers));

require_once "views/message-sent.view.php";
}



      
    }
}