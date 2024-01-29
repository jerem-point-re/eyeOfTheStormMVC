<?php
// Ce code PHP est le point d'entrée pour l'application Web, construite en utilisant le modèle de conception MVC* (Modèle Vue Contrôleur).

session_start();
// session_start(); : Démarre la session PHP, qui permet à l'application de stocker et de récupérer des données associées à la visite d'un utilisateur sur le site Web.

global $baseURL, $logged, $loggedID;
// global $baseURL, $logged, $loggedID; - Cette ligne déclare trois variables globales qui seront utilisées tout au long de l'application.
$baseURL = "http://localhost:8888/roshanc/eyeOfTheStorm/";
// Contient l'URL de base de l'application, utilisée pour construire des URL absolues pour les liens et les formulaires.
$logged = isset( $_SESSION['user']);
// Booléen qui indique si l'utilisateur actuel est connecté en récupérant la valeur de la variable $_SESSION au tableau ['user'].
$loggedID = isset( $_SESSION['user']['id_user']);
// Booléen qui indique l'identifiant de l'utilisateur actuellement connecté.

// Les trois boucles foreach suivantes utilisent la fonction glob pour inclure tous les fichiers PHP respectivement dans les répertoires models, views et controllers. Ce système a pour but de pouvoir charger les classes et les modèles.
foreach (glob('models/*.php') as $file) {
    // L'instruction require_once est utilisée si un fichier a déjà été inclus, il ne sera pas inclus à nouveau, ce qui aide à prévenir les erreurs et améliorer les performances.
    require_once $file;
}
// Le dossier models contient des classes qui représentent les modèles pour l'intéraction avec la base de données reliée à l'application. On l'inclut en premier car il intègre justement la gestion de la base de données (db.php).

foreach (glob('views/*.php') as $file) {
    require_once $file;
}
// Le répertoire views contient des modèles PHP qui définissent la manière dont l'UI** est affichée.

foreach (glob('controllers/*.php') as $file) {
    require_once $file;
}
// Le dossier controllers contient des classes PHP qui gèrent les entrées des utilisateurs et gèrent le flux de données entre les modèles et les vues.

// En résumé, ce code configure la structure de base de l'application et charge les classes et les modèles nécessaires pour le 'framework' MVC.

// * MVC : Model View Controller - trad. Modèle Vue Contrôleur
// ** UI : User Interface - trad. Interface Utilisateur