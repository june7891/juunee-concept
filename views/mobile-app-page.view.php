<?php ob_start(); 
?>

<section>
    <div class="mobile-app-page-hero">
        <div class="title-background">
            <h1 class="text-xl md:text-3xl text-white mt-20">Conception et développement d'applications mobiles</h1>
        </div>
    </div>

    <div class="flex flex-col-reverse justify-center content-center m-10 md:flex-col-reverse lg:flex-row lg:text-lg">
        <div class="p-1 md:w-100 lg:w-1/2 md:p-10 xl:p-20"><img class="rounded-xl img-responsive"
                src="https://images.pexels.com/photos/221185/pexels-photo-221185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="conception application mobile sur mesure"></div>
        <div class="p-1 md:w-100 lg:w-1/2 md:p-10 xl:p-20">

            <h2 class="mb-5">Une application mobile, c'est quoi?</h2>
            <p class="mb-5">Une application mobile, également connue sous le nom d'application mobile, est un logiciel
                applicatif
                destiné à fonctionner sur un appareil électronique mobile, comme un assistant personnel, un téléphone
                portable, un smartphone, un baladeur numérique ou une tablette tactile. Les applications sont
                conçues pour être accessibles partout, en tenant compte de contraintes ergonomiques (adaptabilité à la
                taille du smartphone ou écran tactile). </p>
        </div>
    </div>



    <div class="py-4 px-4 mx-auto max-w-screen-xl bg-gray-100 sm:py-16 lg:px-6" data-aos="fade-up"
        data-aos-duration=" 1000">

        <h2
            class="mb-8 text-2xl xl:text-3xl tracking-tight font-extrabold mb-8 text-center text-gray-900 dark:text-white">
            Nous vous proposons :</h2>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Expertise technique</h3>
                <p class="text-gray-950 dark:text-gray-400">Pour garantir des applications performantes, sécurisées et
                    conviviales, nos développeurs utilisent les dernières technologies et les meilleures pratiques de
                    l'industrie. Nous avons l'expertise nécessaire pour transformer votre idée en réalité, que vous ayez
                    besoin d'une application native Android, iOS ou d'une solution multiplateforme.
                </p>
            </div>

            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Design intuitif</h3>
                <p class="text-gray-950 dark:text-gray-400">Au-delà de la fonctionnalité, nous accordons une attention
                    particulière au design de nos applications. Un design intuitif et esthétique est essentiel pour
                    offrir une expérience utilisateur exceptionnelle. Notre équipe de designers talentueux travaille en
                    harmonie avec nos développeurs pour créer des interfaces utilisateur attrayantes et fonctionnelles.
                </p>
            </div>


            <div class="bg-white p-10 shadow-xl">

                <h3 class="mb-2 text-md lg:text-xl font-bold dark:text-white">Support post-lancement</h3>
                <p class="text-gray-950 dark:text-gray-400">Notre engagement envers nos clients va au-delà de la simple
                    livraison du produit. Pour nous assurer que votre application fonctionne de manière optimale et
                    reste à jour avec les évolutions technologiques, nous fournissons un support continu
                    post-lancement..</p>
            </div>



        </div>
    </div>






    <div class="md:text-center m-10">
        <p class="p-0 my-10 xl:p-20">Confiez-nous la création de votre application mobile et laissez-nous transformer
            votre vision
            en une présence en ligne exceptionnelle. Contactez-nous dès aujourd'hui pour discuter de votre projet et
            découvrir
            comment
            nous pouvons vous aider à atteindre vos objectifs en ligne.</p>
        <div class="text-center"> <a href="<?=URL?>#contact"><button class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-white
        hover:text-gray-900 hover:border-solid border-2 hover:border-gray-900">Contactez nous</button></a></div>
    </div>
</section>

<?php $content=ob_get_clean(); $titre="Juunee Concept | Création d'applications mobiles"; $url="https://juunee-concept.com/creation-application-mobile"; $image="https://images.unsplash.com/photo-1610664921890-ebad05086414?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"; require "views/commons/template.php" ; ?>