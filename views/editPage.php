<?php

function showEditPage()
{
    global $baseURL, $logged;
    $title = "Modification";
    ob_start();
    ?>

    <ion-content class="ion-padding">
        <ion-row>
            <ion-col size-lg="4" offset-lg="5">
                <ion-card class="ion-padding">
                    <br><br>
                    <ion-card-header>
                        <ion-card-subtitle class="ion-text-center">Modifier un post</ion-card-subtitle>
                        <ion-card-title class="ion-text-center">Eye of the Storm</ion-card-title>
                    </ion-card-header>
                    <br><br>
                    <ion-card-content>
                        <form method="POST">
                            <ion-input type="text" name="titleEdit" label="Titre du post" labelPlacement="floating"
                                maxlength="50" placeholder="Entrez 50 caractères maximum"></ion-input>
                            <br><br>
                            <ion-input type="text" name="imageEdit" label="Insérer l'URL d'une image"
                                labelPlacement="floating" maxlength="255" placeholder="Jusqu'à 255 caractères"></ion-input>
                            <br><br>
                            <textarea name="contentEdit" cols="48" rows="10" label="Contenu du post"
                                labelPlacement="floating"
                                placeholder="Restez concis.e et ne créez pas de panique"></textarea>
                            <br>
                            <input type="hidden" name="postID" value="<?php echo $_GET['id_post']; ?>">
                            <br>
                            <ion-button class="button-full" type="submit" value="Modifier le post" expand="block">Modifier le
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