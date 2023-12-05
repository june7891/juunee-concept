<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Juunee Concept - Création site internet, applications web et mobiles, référencement et bien plus.">
    <meta name=" robots" content="index, follow">
    <meta name="theme-color" content="#1A202C" />
    <meta property="og:title" content="Juunee Concept - Digital Solutions">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.juunee-concept.com">
    <meta property="og:image" content="https://www.juunee-concept.com/assets/images/logo-blue-bckg.jpg">
    <meta name="keywords" content="création, site, internet, application, web, mobile, gironde">
    <meta property="og:description"
        content="Juunee Concept - Création site internet, applications web et mobiles, référencement et bien plus.">


    <link rel="canonical" href="https://www.juunee-concept.com/">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png" />

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
    <link href="assets/css/logo-animation.style.css" rel="stylesheet">
    <link href="assets/css/custom-style.css" rel="stylesheet">
    <link href="assets/css/services-style.css" rel="stylesheet">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8bff0007f7.js" crossorigin="anonymous"></script>
    <title>Juunee Concept | Digital Solutions</title>
</head>

<body>

    <?php

 include_once 'navbar.view.php';?>

    <div>
        <?= $content ?>
    </div>

    <?php include_once 'footer.view.php' ?>

    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>