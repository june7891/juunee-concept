<?php ob_start(); 
?>

<section class="h-screen mt-20">
    <h1>Message envoyé</h1>
</section>

<?php $content=ob_get_clean(); $titre="message envoyé" ; require "views/commons/template.php" ; ?>