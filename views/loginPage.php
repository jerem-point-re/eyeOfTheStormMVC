<?php

function showLoginPage()
{
    global $baseURL, $logged;
    $title = "Connexion";
    ob_start();
    ?>

    <ion-content class="ion-padding">
        <ion-row>
            <ion-col size-lg="4" offset-lg="4">
        <ion-card class="ion-padding">
            <br><br>
            <ion-card-header>
                <ion-card-subtitle class="ion-text-center">Connectez-vous à l'application</ion-card-subtitle>
                <ion-card-title class="ion-text-center">Eye of the Storm</ion-card-title>
            </ion-card-header>
            <br><br>
            <ion-card-content>
                <form method="post">
                    <ion-input type="text" name="username" label="Nom d'utilisateur" labelPlacement="floating"
                        maxlength="23" placeholder="Entrez 23 caractères maximum"></ion-input>
                    <br><br>
                    <ion-input type="password" name="password" label="Mot de passe" labelPlacement="floating"
                        placeholder="Veuillez entrer votre mot de passe"></ion-input>
            </ion-card-content>
            <br><br>
            <?php if($logged) { ?>
            <ion-button value="Connexion" expand="full" [disabled]="true">Déjà connecté.e</ion-button>
            <?php } else { ?>
            <ion-button type="submit" value="Connexion" expand="full">Connexion</ion-button>
            <?php } ?>
            </form>
            <ion-button href="<?= $baseURL."?p=register" ?>" expand="block" fill="outline">Inscription</ion-button>
            <br><br>
        </ion-card>
            </ion-col>
        </ion-row>

    </ion-content>

    <?php

    $content = ob_get_clean();
    require "views/layout.php";
}