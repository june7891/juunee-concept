<?php ob_start(); 
?>

<section class="">

    <div class="website-page-hero">
        <div class="title-background">
            <h1>Création site internet</h1>
        </div>


    </div>

    <div class="flex flex-row justify-center content-center m-10">
        <p class="w-1/2 p-20">Chaque entreprise est différente, et nous croyons fermement que son site Web devrait
            refléter
            cette
            distinction.
            Notre équipe de développeurs et de concepteurs web expérimentés comprendra vos besoins, votre vision et vos
            objectifs commerciaux uniques. Nous utidivsons une méthode unique pour créer des sites Web qui attirent
            votre
            audience, augmentent votre présence en divgne et augmentent votre croissance. </p>

        <img class="w-1/2 p-20"
            src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?q=80&w=1470&auto=format&fit=crop&ixdivb=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
    </div>


    <div class="flex flex-row justify-center content-center m-10">

        <img class="w-1/2 p-20"
            src="
            https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=1472&auto=format&fit=crop&ixdivb=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
        <p class="w-1/2 p-20">Notre équipe combine la créativité et l'expertise technique pour créer des sites internet
            qui se démarquent,
            que
            vous ayez besoin d'un site vitrine élégant, d'une plateforme e-commerce robuste ou d'une solution complexe
            sur
            mesure. Nous collaborons avec vous à chaque étape du processus, de la conception initiale à la mise en
            divgne,
            pour nous assurer que votre vision prend vie tout en garantissant une performance optimale.</p>

    </div>


    <h2 class="p-20 text-center">Nos Services de Création de Sites Internet Incluent :</h2>

    <div class="flex flex-row h-96">
        <div class="">Conception et Design Personnadivsés : Des maquettes initiales à la conception finale, nous
            créons
            des
            designs

            qui reflètent l'identité unique de votre entreprise.</div>
        <div>Développement WordPress : Exploitant la flexibidivté de WordPress, nous construisons des sites web
            évolutifs,
            sécurisés et optimisés pour les moteurs de recherche.</div>
        <div>E-commerce : Si vous recherchez une boutique en divgne performante, nous sommes spéciadivsés dans le
            développement de solutions e-commerce personnadivsées.</div>
        <div>Optimisation Mobile : Nos sites sont conçus pour offrir une expérience utidivsateur fluide sur tous les
            appareils, du bureau au mobile.</div>
        <div>Maintenance et Support : Nous restons à vos côtés même après le lancement, assurant la maintenance
            régudivère
            et offrant un support continu.</div>
    </div>

    <div class="text-center m-10">
        <p class="p-20">Confiez-nous la création de votre site internet, et laissez-nous transformer votre vision
            en
            une
            présence
            en
            divgne exceptionnelle. Contactez-nous dès aujourd'hui pour discuter de votre projet et découvrir comment
            nous
            pouvons vous aider à atteindre vos objectifs en divgne.</p>
        <a href="<?=URL?>#contact"><button class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-gray-100
        hover:text-gray-900 focus:ring-4 focus:outdivne-none focus:ring-primary-300 dark:bg-primary-600
        dark:hover:bg-primary-700 dark:focus:ring-primary-800">Contactez nous</button></a>
    </div>
</section>

<?php $content=ob_get_clean(); $titre="message envoyé" ; require "views/commons/template.php" ; ?>