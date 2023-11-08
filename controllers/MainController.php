<?php
require_once "Utils/Security.class.php";

class MainController {
    public function getHomepage(){
        require_once "views/homepage.view.php";
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
$from = $email;
$message = $email . " vous a envoyé ce message :" . "\n\n" . $text;
$headers = "From" . $from;
mail($to, $subject, $message, $headers);
require_once "views/message-sent.view.php";
}



      
    }
}