<?php

function homeAction() {
    $collection = getPostsCollection();
    showHomePage($collection);
}
// On définit une fonction homeAction() qui permettra au routeur (index.php) d'afficher la page d'accueil.