<?php
require_once "Utils/Security.class.php";

// use PHPMailer\PHPMailer\PHPMailer;
// require 'vendor/autoload.php';







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

// public function sendMessage(){
//     if(!empty($_POST)){
//         $email = htmlentities($_POST['email']);
//         $email_subject = htmlentities($_POST['subject']);
//         $message = htmlentities($_POST['message']);
//         $to = 'contact@tomajune.com';
        
// $subject = $email_subject;
// $body =  $email . ' vous a envoyé ce message: ' . $message;
// $headers = 'From: no-reply@juunee-concept.com' . "\r\n" .
//     'Reply-To: no-reply@juunee-concept.com' . "\r\n" .
//     'Content-type:text/html; charset=iso-8859-1' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

//     if(mail($to, $subject, $body, $headers)){
//         require_once "views/message-sent.view.php";
//     } else {
//               header('Location: ' . URL . "#contact");
//     }

    
// } 
//     }


public function sendMessage(){
    // Check if the form is submitted
    if(!empty($_POST)){
        // Verify reCAPTCHA
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        $secretKey = '6LcPHH8pAAAAAKi8isMZaKAT66FKInupHRHKSlfH'; // Replace with your secret key
        
        $verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}";
        $response = file_get_contents($verifyUrl);
        $responseData = json_decode($response);
        
        // Check if reCAPTCHA is successful
        if($responseData->success){
            // Proceed with sending the email
            $email = htmlentities($_POST['email']);
            $email_subject = htmlentities($_POST['subject']);
            $message = htmlentities($_POST['message']);
            $to = 'contact@tomajune.com';
            
            $subject = $email_subject;
            $body =  $email . ' vous a envoyé ce message: ' . $message;
            $headers = 'From: no-reply@juunee-concept.com' . "\r\n" .
                'Reply-To: no-reply@juunee-concept.com' . "\r\n" .
                'Content-type:text/html; charset=iso-8859-1' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if(mail($to, $subject, $body, $headers)){
                require_once "views/message-sent.view.php";
            } else {
                header('Location: ' . URL . "#contact");
            }
        } else {
            // If reCAPTCHA verification fails, redirect back to the form
            header('Location: ' . URL . "#contact");
        }
    }
}
   
}