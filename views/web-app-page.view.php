<?php ob_start(); 
?>

<section>
    <div class="web-app-page-hero">
        <div class="title-background mt-20">
            <h1 class="text-xl md:text-3xl  text-white">Conception et développement d'applications web</h1>
        </div>
    </div>

    <div class="flex flex-col-reverse justify-center content-center m-10 lg:flex-row lg:p-10 lg:text-lg">
        <div class="p-1 lg:w-1/2 xl:p-20"><img class="rounded-lg img-responsive"
                src="https://images.pexels.com/photos/221185/pexels-photo-221185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="conception application web sur mesure"></div>
        <div class="p-1 my-5 lg:px-5 lg:w-1/2 xl:p-20">

            <h2 class="mb-5">Une application web, c'est quoi?</h2>
            <p>Une application web (ou web app) est une interface d'application web qui ne peut être utilisée que sur le
                Web
                et
                qui doit être accédée via un navigateur internet. C'est une application qui peut être hébergée sur des
                serveurs
                dédiés ou en cloud. Un serveur Web contient toutes les informations. </p>
        </div>
    </div>


    <div class="flex flex-col justify-center content-center m-10 lg:flex-row lg:p-10">


        <div class="p-1 my-5 lg:px-5 lg:w-1/2 xl:p-20 lg:text-lg">
            <h2 class="mb-5">Quels sont les avantages d'une web app? </h2>

            <p>Le principal avantage est qu'il est disponible partout, ce qui signifie que vous
                pouvez
                vous
                connecter
                depuis
                n'importe quel poste et garder toutes vos données synchronisées. Contrairement à un logiciel ou
                une
                application
                mobile, les sauvegardes sont centralisées sur le serveur, ce qui signifie qu'il n'y a plus
                besoin de
                faire
                des
                mises
                à jour sur tous les postes de travail. La mise en place sera beaucoup plus simple et plus rapide
                en cas
                de
                remplacement de poste. Une application web permet de créer des comptes avec plusieurs accès en
                ajoutant
                des
                identifiants et des mots de passe.</p>
        </div>

        <div class="p-1 lg:mt-5 lg:w-1/2 xl:p-20"><img class="rounded-lg img-responsive"
                src="https://images.pexels.com/photos/38544/imac-apple-mockup-app-38544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="avantages d'une application web"></div>

    </div>
    <div class="py-4 px-4 mx-auto max-w-screen-xl bg-gray-100 sm:py-16 lg:px-6" data-aos="fade-up"
        data-aos-duration="1000">

        <h2
            class="mb-8 text-xl xl:text-2xl tracking-tight font-extrabold mb-8 text-center text-gray-900 dark:text-white xl:text-3xl">
            Exemples
            d'une web app :</h2>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md xl:text-xl font-bold dark:text-white">Système de gestion de projet collaboratif
                </h3>
                <p class="text-gray-950 dark:text-gray-400">Une application web qui facilite la collaboration au
                    sein
                    des
                    équipes en permettant la planification, le suivi des tâches et le partage de documents en temps
                    réel.
                </p>
            </div>

            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md xl:text-xl font-bold dark:text-white">Plateforme de réservation en ligne</h3>
                <p class="text-gray-950 dark:text-gray-400">Un système qui permet aux clients de réserver des
                    rendez-vous,
                    des chambres d'hôtel, des tables de restaurant, etc., offrant ainsi une expérience de
                    réservation
                    rapide
                    et facile.
                </p>
            </div>


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md xl:text-xl font-bold dark:text-white">Application de suivi des ventes</h3>
                <p class="text-gray-950 dark:text-gray-400">Un outil qui offre une visibilité en temps réel sur les
                    performances des ventes, les leads, les opportunités et les prévisions, aidant ainsi les équipes
                    commerciales à maximiser leur efficacité.</p>
            </div>



        </div>
    </div>






    <div class="md:text-center m-10">
        <p class="p-0 my-10 xl:p-20">Confiez-nous la création de votre application web et laissez-nous transformer
            votre
            vision
            en une présence en ligne exceptionnelle. Contactez-nous dès aujourd'hui pour discuter de votre projet et
            découvrir
            comment
            nous pouvons vous aider à atteindre vos objectifs en ligne.</p>
        <div class="text-center"><a href="<?=URL?>#contact"><button class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-white
        hover:text-gray-900 hover:border-solid border-2 hover:border-gray-900">Contactez nous</button></a></div>
    </div>
</section>

<?php $content=ob_get_clean(); $titre="Juunee Concept | Création d'applications web"; $url="https://juunee-concept.com/creation-application-web"; $image="https://images.pexels.com/photos/16129877/pexels-photo-16129877/free-photo-of-ordinateur-portable-lit-ordinateur-maison.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"; require "views/commons/template.php"; ?>