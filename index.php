<?php

require_once("autoloader.php");
// Ce code PHP implémente le rooting*, il inclut les autres fichiers PHP nécessaires avec le require_once du fichier autoloader.php.

// On vérifie si la variable $_GET['p'] est définie, $_GET est une super variable (en PHP) qui contient les paramètres passées via l'URL, le ['p'] ici, fait référence à un paramètre passé après un point d'interrogation (par exemple, https://www.jerem.re/?p=home définira ['p'] à home pour la page d'accueil).
if (isset($_GET['p'])) {
    // On utilise une boucle switch pour vérifier la valeur de ce paramètre : si la valeur est 'home', la fonction associée est appelée (homeAction()), sinon la fonction par défaut est appelée.
    switch ($_GET['p']) {
        // On instancie les paramètres d'URL à login et register pour satisfaire les fonctions dans leurs pages respectives.
        case 'login':
            loginAction();
            break;
        case 'register':
            registerAction();
            break;
        case 'home':
            homeAction();
            break;
        case 'logout':
            // Si la valeur est 'logout', on deconnecte l'utilisateur..
            session_destroy();
            // ..et on le renvoi vers la page d'accueil.
            header("Location: $baseURL?p=login");
            break;
        default:
            homeAction();
            break;
    }
} else {
    // Dans les autres cas, par exemple si la variable $_GET['p'] n'est pas définie ou que l'utilisateur entre une autre URL que prévu, on le renvoi vers la page d'accueil par l'action de la fonction homeAction().
    homeAction();
}
// En résumé, ce code vérifie si un paramètre d'URL est défini et appelle une fonction en fonction de sa valeur, ou appelle une fonction par défaut si elle n'est pas définie.

// * Rooting : système de routage (routeur)