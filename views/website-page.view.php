<?php ob_start(); 
?>

<section class="bg-gray-100">

    <div class="website-page-hero">
        <div class="title-background">
            <h1 class="text-xl md:text-3xl text-white">Création de site internet</h1>
        </div>


    </div>

    <div class="flex flex-col justify-center content-center m-10 md:flex-col lg:flex-row">
        <p class="p-1 my-5 md:w-100 lg:w-1/2 lg:p-20 lg:text-lg">Chaque entreprise est différente, et nous croyons
            fermement que
            son
            site
            Web
            devrait
            refléter
            cette
            distinction.
            Notre équipe de développeurs et de concepteurs web comprendra vos besoins, votre vision
            et vos
            objectifs commerciaux uniques. Nous utilisons une méthode unique pour créer des sites Web qui
            attirent
            votre
            audience, augmentent votre présence en ligne et augmentent votre croissance. </p>

        <div class="p-1 md:w-100 lg:w-1/2 md:p-10 xl:p-20">
            <img class="rounded-xl img-responsive"
                src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?q=80&w=1470&auto=format&fit=crop&ixdivb=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="création site web e-commerce">
        </div>
    </div>


    <div class="flex flex-col-reverse justify-center content-center m-10 lg:flex-row">

        <div class="p-1 md:w-100 lg:w-1/2 md:p-10 xl:p-20"> <img class="rounded-xl img-responsive"
                src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=1472&auto=format&fit=crop&ixdivb=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="site vitrine">
        </div>
        <p class="p-1 my-5 md:w-100 lg:w-1/2 lg:p-20 lg:text-lg">Notre équipe combine la créativité et l'expertise
            technique pour
            créer
            des
            sites
            internet
            qui se démarquent,
            que
            vous ayez besoin d'un site vitrine élégant, d'une plateforme e-commerce robuste ou d'une solution
            complexe
            sur
            mesure. Nous collaborons avec vous à chaque étape du processus, de la conception initiale à la mise en
            divgne,
            pour nous assurer que votre vision prend vie tout en garantissant une performance optimale.</p>

    </div>

    <div class="py-4 px-4 mx-auto max-w-screen-xl bg-gray-100 sm:py-16 lg:px-6" data-aos="fade-up"
        data-aos-duration="1000">

        <h2
            class="mb-8 text-2xl lg:text-3xl tracking-tight font-extrabold mb-8 text-center text-gray-900 dark:text-white">
            Nos
            services de création de sites internet incluent :</h2>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Conception et design personnalisés</h3>
                <p class="text-gray-950 dark:text-gray-400">Des maquettes initiales à la conception
                    finale, nous créons des designs qui reflètent l'identité unique de votre entreprise.</p>
            </div>

            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Développement WordPress</h3>
                <p class="text-gray-950 dark:text-gray-400">Exploitant la flexibilité de WordPress, nous
                    construisons des sites web évolutifs, sécurisés et optimisés pour les moteurs de recherche.
                </p>
            </div>


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">E-commerce</h3>
                <p class="text-gray-950 dark:text-gray-400">Si vous recherchez une boutique en ligne performante,
                    nous
                    sommes spécialisés dans
                    le développement de solutions e-commerce personnalisées.</p>
            </div>

            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Optimisation Mobile </h3>
                <p class="text-gray-950 dark:text-gray-400">Nos sites sont conçus pour offrir une expérience
                    utilisateur fluide sur tous
                    les appareils, du bureau au mobile.</p>
            </div>

            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-xl font-bold dark:text-white">Maintenance et support</h3>
                <p class="text-gray-950 dark:text-gray-400">Nous restons à vos côtés même après le lancement,
                    assurant la maintenance
                    régulière et offrant un support continu.</p>
            </div>

        </div>
    </div>



    <div class="md:text-center m-10">
        <p class="p-0 my-10 xl:p-20">Confiez-nous la création de votre site internet, et laissez-nous transformer
            votre
            vision
            en une présence en ligne exceptionnelle. Contactez-nous dès aujourd'hui pour discuter de votre projet et
            découvrir
            comment
            nous pouvons vous aider à atteindre vos objectifs en ligne.</p>
        <div class="text-center"> <a href="<?=URL?>#contact"><button class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-white
        hover:text-gray-900 hover:border-solid border-2 hover:border-gray-900">Contactez nous</button></a></div>

    </div>
</section>

<?php $content=ob_get_clean(); $titre="Juunee Concept | Création de sites internet"; $url="https://juunee-concept.com/creation-site-internet"; $image="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1630&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"; require "views/commons/template.php" ; ?>