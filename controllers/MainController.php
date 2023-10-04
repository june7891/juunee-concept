<?php


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
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
  
   if (empty($email)) {
       $errors[] = 'Name is empty';
   }

   if (empty($subject)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }
}

if (!empty($errors)) {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
 }
      require_once "views/message-sent.view.php";
    }
}