<?php
// On déclare deux variables globales : $baseURL et $logged. Le mot-clé global est utilisé pour indiquer que ces variables sont définies dans la portée globale et peuvent être accessibles depuis une fonction.

global $baseURL, $logged;
// On récupère les valeurs de ces variables depuis le fichier autoloader.php.

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Création du fichier HTML basique et importation du framework Ionic pour que l'application Web ressemble un peu plus à un application mobile, mais le responsive* en plus ! -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <!-- On déclare notre CSS après celui d'Ionic au cas où l'on aurait besoin de supplanter du style -->
    <link rel="stylesheet" href="../style.css">
    <!-- On instancie notre JavaScript pour les quelques intéractions dont on a besoin -->
    <script src="../app.js" defer></script>
</head>

<body>
    <ion-app>
        <ion-header>
            <ion-toolbar>
                <ion-buttons slot="start">
                    <ion-button href="<?= $baseURL . "?p=home" ?>">
                        <ion-icon slot="start" name="thunderstorm-outline" size="large"></ion-icon>
                        <?= $title ?>
                    </ion-button>
                </ion-buttons>
                <?php if ($logged) { ?>
                    <ion-buttons slot="end">
                        <ion-button href="<?= $baseURL . "?p=logout" ?>">
                            <ion-icon slot="end" name="person-circle-outline" size="large"></ion-icon>
                            <?= $_SESSION["user"]["username"] ?>
                        </ion-button>
                    </ion-buttons>
                <?php } ?>
            </ion-toolbar>
        </ion-header>
        <!-- On affiche le contenu de nos autres pages grace à ob_start et la variable $content -->
        <?= $content ?>
        <ion-footer>
            <ion-toolbar><ion-tabs>
                    <ion-tab-bar slot="bottom">
                        <?php if ($logged) { ?>
                            <ion-tab-button href="<?= $baseURL ?>">
                                <ion-icon name="thunderstorm-outline"></ion-icon>
                                Eye of the Storm
                            </ion-tab-button>
                        <?php } ?>
                        <?php if (!$logged) { ?>
                            <ion-tab-button href="<?= $baseURL . "?p=login" ?>">
                                <ion-icon name="log-in-outline"></ion-icon>
                                Connexion
                            </ion-tab-button>
                        <?php } ?>
                        <ion-tab-button href="<?= $baseURL . "?p=register" ?>">
                            <ion-icon name="paw-outline"></ion-icon>
                            Inscription
                        </ion-tab-button>
                        <?php if ($logged) { ?>
                            <ion-tab-button href="<?= $baseURL . "?p=logout" ?>">
                                <ion-icon name="log-out-outline"></ion-icon>
                                Déconnexion
                            </ion-tab-button>
                        <?php } ?>
                    </ion-tab-bar>
                </ion-tabs>
            </ion-toolbar>
        </ion-footer>
    </ion-app>
</body>

</html>

<!-- * Responsive : Adaptabilité de la page à tous les formats d'écran définis -->