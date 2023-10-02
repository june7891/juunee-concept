<?php ob_start(); 
?>


<h1>mentions légales</h1>
<p>Photo de <a
        href="https://unsplash.com/fr/@laurenmancke?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Lauren
        Mancke</a> sur <a
        href="https://unsplash.com/fr/photos/qc3sE5lGLbA?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
</p>
<?php $content=ob_get_clean(); $titre="mentions légales" ; require "views/commons/template.php" ; ?>