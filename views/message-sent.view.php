<?php ob_start(); 
?>

<section class="h-screen mt-20 text-center">
    <h3 class="text-xl">Votre message a été envoyé! Nous vous répondrons dans les plus brefs délais!</h3>
    <img class="w-1/2 mx-auto my-20" src="<?= URL ?>assets/images/message-sent.jpg" alt="avion papier">
</section>

<?php $content=ob_get_clean(); $titre="Message envoyé"; $url="https://juunee-concept.com/message-envoyé"; require "views/commons/template.php" ; ?>