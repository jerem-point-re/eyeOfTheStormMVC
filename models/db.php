<?php

// On déclare la variable globale $pdo pour pouvoir l'assigner plus tard.
global $pdo;

// On utilise PDO dans le MVC* pour sécuriser la connexion à la base de données et éviter les injections SQL.
if(isset($pdo)) {
    // Si la connexion avec PDO est effective alors on la retourne dans la variable $pdo définie ci-après.
    return $pdo;
}

// On assigne la variable $pdo en déclarant une nouvelle instance de PDO.
$pdo = new PDO('mysql:host=localhost;dbname=stormeye;charset=utf8','root','root');
// Les paramètres de la fonction servent à établir la connexion avec la base de données, le language de la base, l'hôte, le nom de la base, l'utilisateur et le mot de passe pour cette base sont également renseignés

// * MVC : Modèle Vue Contrôleur, cf https://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur