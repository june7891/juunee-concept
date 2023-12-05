<?php ob_start(); 
?>

<section class="h-screen m-20 ">
    <div class="web-app-page-hero">
        <h1>Conception et développement d'applications web</h1>

    </div>




    <p>Confiez-nous la création de votre site internet, et laissez-nous transformer votre vision en une présence en
        ligne exceptionnelle. Contactez-nous dès aujourd'hui pour discuter de votre projet et découvrir comment nous
        pouvons vous aider à atteindre vos objectifs en ligne.</p>
</section>

<?php $content=ob_get_clean(); $titre="message envoyé" ; require "views/commons/template.php" ; ?>