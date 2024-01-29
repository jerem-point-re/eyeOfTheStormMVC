<?php

function showHomePage($collection)
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
        <?php if ($logged) { ?>
            <ion-row>
                <?php foreach ($collection as $c) { ?>
                    <ion-col size-lg="6" size="12">
                        <ion-card class="ion-padding">
                            <ion-card-header id="userImage">
                                <?php if ($c["image"]) { ?>
                                    <img src="<?= $c["image"] ?>" alt="">
                                <?php } ?>
                            </ion-card-header>

                            <ion-card-title>
                                <ion-item>
                                    <?php if ($c["id_user"] === $_SESSION["user"]["id_user"]) { ?>
                                        <ion-buttons slot="end">
                                            <ion-button fill="clear" slot="icon-only">
                                                <a href="<?php $baseURL ?>?p=edit&id_post=<?= $c['id_post'] ?>">
                                                    <ion-button fill="clear" slot="icon-only">
                                                        <ion-icon name="create-outline" slot="icon-only" color="primary"></ion-icon>
                                                </a>
                                            </ion-button>
                                            <ion-button fill="clear" slot="icon-only">
                                                <a href="<?php $baseURL ?>?p=delete&id=<?= $c['id_post'] ?>">
                                                    <ion-icon name="trash-outline" slot="icon-only" color="danger"></ion-icon>
                                                </a>
                                            </ion-button>
                                        </ion-buttons>
                                    <?php } ?>
                                    <?= $c["title"] ?>
                                </ion-item>
                            </ion-card-title>

                            <ion-card-subtitle class="ion-text-center">
                                <p>
                                    <?= $c["content"] ?>
                                </p>
                            </ion-card-subtitle>

                        </ion-card>
                    </ion-col>
                <?php } ?>
            </ion-row>

            <!-- On affiche conditionnellement un bouton en fonction de la valeur de la variable $title pour pouvoir plus tard ajouter un post depuis cette page. -->
            <?php if ($title == "Eye of the Storm") { ?>
                <ion-fab slot="fixed" vertical="bottom" horizontal="end">
                    <ion-fab-button href="<?= $baseURL . "?p=post" ?>">
                        <ion-icon name="add"></ion-icon>
                    </ion-fab-button>
                </ion-fab>
            <?php } ?>
        <?php } ?>
    </ion-content>

    <?php
    $content = ob_get_clean();
    // Avec ob_get_clean(), on termine de mettre en cache le contenu de la page pour le retourner dans la variable $content de fichier suivant :
    require "views/layout.php";
}