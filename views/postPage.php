<?php

function showPostPage()
{
    global $baseURL, $logged;
    $title = "Nouveau post";
    ob_start();
    ?>

    <ion-content class="ion-padding">
        <ion-row>
            <ion-col size-lg="4" offset-lg="5">
                <ion-card class="ion-padding">
                    <br><br>
                    <ion-card-header>
                        <ion-card-subtitle class="ion-text-center">Créez un nouveau post</ion-card-subtitle>
                        <ion-card-title class="ion-text-center">Eye of the Storm</ion-card-title>
                    </ion-card-header>
                    <br><br>
                    <ion-card-content>
                        <form method="POST">
                            <ion-input type="text" name="title" label="Titre du post" labelPlacement="floating"
                                maxlength="50" placeholder="Entrez 50 caractères maximum"></ion-input>
                            <br><br>
                            <ion-input type="text" name="image" label="Insérer l'URL d'une image" labelPlacement="floating"
                                maxlength="255" placeholder="Jusqu'à 255 caractères"></ion-input>
                            <br><br>
                            <textarea name="content" cols="48" rows="10" label="Contenu du post" labelPlacement="floating"
                                placeholder="Restez concis.e et ne créez pas de panique"></textarea>
                            <br><br>
                            <ion-button class="button-full" type="submit" value="Créer le post" expand="block">Créer le
                                post</ion-button>
                        </form>
                    </ion-card-content>
                    <br><br>
                </ion-card>
            </ion-col>
        </ion-row>
    </ion-content>

    <?php

    $content = ob_get_clean();
    require "views/layout.php";
}