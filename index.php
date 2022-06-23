<?php
session_start();

// URL de base du site
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]));

try {
    // TODO : mettre ici les instances de controllers dont j'aurai besoin

    if (empty($_GET["page"])) {
        require "view/homepageView.php";
    } else {
        $url = explode("/", filter_var($_GET["page"]), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "view/homepageView.php";
                break;

            case "inscription":
                // TODO : faire la vue pour l'inscription
                echo "Page non créée !";
                break;

            case "connexion":
                if (count($url) === 1) {
                    // TODO : appeler ici la méthode affichant le formulaire de connection
                } else {
                    switch ($url[1]) {
                        case "validation":
                            // TODO : appeler ici la méthode pour controler les infos de l'utilisateur et valider sa connexion
                            break;
                    }
                }
                break;

            case "deconnexion":
                // TODO : appeler ici la méthode pour déconnecter l'utilisateur
                break;

            case "connards":
                if (count($url) === 1) {
                    // TODO : appeler ici la méthode pour afficher tous les connards listés
                    break;
                } else {
                    switch ($url[1]) {
                        case "afficher":
                            // TODO : appeler ici la méthode pour afficher un connard par rapport à son ID stocké dans $url[2]
                            break;
                        case "ajouter":
                            // TODO : appeler ici la méthode pour ajouter un connard
                            break;
                        case "valider":
                            // TODO : appeler ici la méthode pour valider l'ajout en BDD du connard + retour vers la page d'accueil + boite dial success
                            break;
                        case "supprimer":
                            // TODO : appeler ici la méthode pour supprimer le connard
                            break;
                        default:
                            throw new Exception("Aucune sous page trouvée !");
                    }
                }
            case "vote":
                if (count($url) === 1) {
                    // TODO : mettre ici les méthodes affichant deux connards RANDOM
                    break;
                } else {
                    // TODO : appeler ici la méthode pour ajouter un vote au connard en fonction de son ID stocké dans $url[2]
                    break;
                }

            default:
                throw new Exception("Aucune page principale trouvée !");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    // TODO : ajouter ici une vue pour gérer l'affichage des erreurs
}
