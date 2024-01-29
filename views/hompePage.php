<?php

function showHomePage()
// On définit une fonction showHomePage() qui va générer le contenu de la page d'accueil d'une application web.
{
    global $baseURL, $logged;
    $title = "Eye of the Storm";
    // On instancie un titre pour la page afin de l'afficher ultérieurement.
    ob_start();
    // Avec ob_start(), on commence a mettre en cache le contenu de la page.
    ?>

<ion-content class="ion-padding">
        <!-- Si l'utilisateur n'est pas connecté on lui affiche une carte avec une redirection pour qu'il puisse arriver sur la page de connexion et se connecter. -->
        <?php if (!$logged) { ?>
            <ion-card>
                <ion-card-header>
                    <ion-card-title>
                        <ion-item lines="none"><ion-label>Vous devez vous connecter pour voir les posts</ion-label></ion-item>
                    </ion-card-title>
                </ion-card-header>

                <ion-card-content class="ion-text-center">
                    <ion-button href="<?= $baseURL . "?p=login" ?>">Connexion</ion-button>
                </ion-card-content>
            </ion-card>
        <?php } ?>

        <!-- On affiche conditionnellement un bouton en fonction de la valeur de la variable $title pour pouvoir plus tard ajouter un post depuis cette page. -->
        <?php if ($title == "Eye of the Storm") { ?>
            <ion-fab slot="fixed" vertical="bottom" horizontal="end">
                <ion-fab-button href="<?= $baseURL . "?p=post" ?>">
                    <ion-icon name="add"></ion-icon>
                </ion-fab-button>
            </ion-fab>
        <?php } ?>
    </ion-content>

    <?php
    $content = ob_get_clean();
    // Avec ob_get_clean(), on termine de mettre en cache le contenu de la page pour le retourner dans la variable $content de fichier suivant :
    require "views/layout.php";
}