<?php 

    require_once "controllers/MainController.php";

    $mainController = new MainController();




define("URL", str_replace("index.php", "" , (isset($_SERVER['HTTPS']) ? "https" : "http" )
    . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]" ));





    try {
        if (empty($_GET['page'])) {
            $mainController->getHomepage();
        } else {
            $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL)) ?? "";
            if (empty($url[0])) throw new Exception("La page n'existe pas");
            switch ($url[0]) {
                case "mentions-legales":
                    $mainController->getLegalPage();
                    break;
                case "sendMessage":
                    $mainController->sendMessage();
                    break;
                case "creation-site-internet":
                    $mainController->getWebsitePage();
                    break;
                case "creation-application-web":
                    $mainController->getWebAppPage();
                    break;
                case "creation-application-mobile":
                    $mainController->getMobileAppPage();
                    break;
             
           
                default:
                $mainController->getHomepage();
    
                }    
        }
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo $msg;
    }