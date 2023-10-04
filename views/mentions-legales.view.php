<?php ob_start(); 
?>

<section class="h-screen mt-20">

    <h1 class="text-black text-3xl text-center font-bold"> Mentions légales</h1>
    <p class="mx-20 my-5">Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en
        l'économie
        numérique, il
        est précisé aux utilisateurs du site juunee-concept l'identité des différents intervenants dans le cadre de sa
        réalisation et de son suivi.</p>

    <h3 class="text-xl text-center my-5 font-bold">Edition du site</h3>
    <p class="mx-20 my-5">Le présent site, accessible à l’URL www.juunee-concept.com (le « Site »), est édité par :<br>

        Toma Juneviciute, résidant 2 Rue Françoise Sagan 33140 Villenave d'Ornon, de nationalité Lituanienne (Lituanie),
        né(e) le 19/11/1987,
    </p>

    <h3 class="text-xl text-center my-5 font-bold">Hébergement du site</h3>
    <p class="mx-20 my-5">Le Site est hébergé par la société OVH SAS, situé 2 rue Kellermann - BP 80157 - 59053 Roubaix
        Cedex 1, (contact
        téléphonique ou email : 1007).</p>

    <h3 class="text-xl text-center my-5 font-bold">Directeur de publication</h3>
    <p class="mx-20 my-5">Le Directeur de la publication du Site est Toma Juneviciute.</p>

    <h3 class="text-xl text-center my-5 font-bold">Nous contacter</h3>

    <ul class="mx-20 my-5">
        <li>Par téléphone : +33699171596</li>
        <li>Par email : contact@tomajune.com</li>
        <li>Par courrier : 2 Rue Françoise Sagan 33140 Villenave d'Ornon</li>
    </ul>

    <h3 class="text-xl text-center my-5 font-bold">Données personnelles</h3>
    <p class="mx-20 my-5">Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la
        vie privée,
        disponible depuis la section "Charte de Protection des Données Personnelles", conformément au Règlement Général
        sur la Protection des Données 2016/679 du 27 avril 2016 («RGPD»).</p>
    <h3 class="text-xl text-center my-5 font-bold">Images</h3>
    <p class="mx-20 my-5">Photo de <a
            href="https://unsplash.com/fr/@laurenmancke?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Lauren
            Mancke</a> sur <a
            href="https://unsplash.com/fr/photos/qc3sE5lGLbA?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
    </p>
</section>


<?php $content=ob_get_clean(); $titre="mentions légales" ; require "views/commons/template.php" ; ?>