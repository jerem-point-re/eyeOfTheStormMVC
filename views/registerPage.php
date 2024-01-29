<?php

function showRegisterPage()
{
    global $baseURL, $logged;
    $title = "Inscription";
    ob_start();
    ?>

    <ion-content class="ion-padding">
        <ion-row>
            <ion-col size-lg="4" offset-lg="4">
                <?php if ($logged) { ?>
                    <ion-card>
                        <img src="https://http.cat/images/508.jpg" />
                        <ion-card-header>
                            <ion-card-title>Erreur dans la satisfaction de la demande</ion-card-title>
                            <ion-card-subtitle>L'utilisateur <code><?= $_SESSION["user"]["username"] ?></code> est déjà
                                connecté.e</ion-card-subtitle>
                        </ion-card-header>

                        <ion-card-content>
                            Veuillez vous déconnecter et revenir à cette page pour réessayer.
                        </ion-card-content>

                        <ion-button fill="clear" href="<?= $baseURL . "?p=logOutAndSignIn" ?>">Se déconnecter pour réessayer</ion-button>
                        <ion-button fill="clear" href="<?= $baseURL ?>">Abandoner et aller à l'accueil</ion-button>
                    </ion-card>
                <?php } else { ?>
                    <ion-card class="ion-padding">
                        <br><br>
                        <ion-card-header>
                            <ion-card-subtitle class="ion-text-center">Inscrivez-vous à l'application</ion-card-subtitle>
                            <ion-card-title class="ion-text-center">Eye of the Storm</ion-card-title>
                        </ion-card-header>
                        <br><br>
                        <ion-card-content>
                            <form method="post">
                                <ion-input type="text" name="username" label="Nom d'utilisateur" labelPlacement="floating"
                                    maxlength="23" placeholder="Entrez 23 caractères maximum"></ion-input>
                                <br><br>
                                <ion-input type="password" name="password" label="Mot de passe" labelPlacement="floating"
                                    placeholder="Il sera hashé pour plus de fiabilité"></ion-input>
                        </ion-card-content>
                        <br><br>
                        <?php if ($logged) { ?>
                            <ion-button value="Connexion" expand="full" [disabled]="true">Déjà connecté.e</ion-button>
                        <?php } else { ?>
                            <ion-button type="submit" value="Inscription" expand="full">Inscription</ion-button>
                        <?php } ?>
                        </form>
                        <ion-button href="<?= $baseURL . "?p=login" ?>" expand="block" fill="outline">Connexion</ion-button>
                        <br><br>
                    </ion-card>
                <?php } ?>
            </ion-col>
        </ion-row>

    </ion-content>
    <?php

    $content = ob_get_clean();
    require "views/layout.php";
}