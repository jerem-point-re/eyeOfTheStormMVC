<?php

function postAction()
{
    global $baseURL;

    if ($_POST) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $id_user = $_SESSION['user']['id_user'];

        $output = createPost($title, $content, $id_user, $image);
        if ($output) {
            echo 'Le post est bien créé et enregistré';
            header("Location: $baseURL?p=home");
        } else {
            echo "Hu-oh. Une erreur s'est produite.";
        }
    }

    showPostPage();
}

function deleteAction()
{

    global $baseURL;

    // Vérifie si le post existe et définit l'ID
    if (isset($_GET['id'])) {
        $id_post = $_GET['id'];

        deletePost($id_post);
        echo "Post supprimé";
    }
    // Si le post n'existe pas, redirige vers l'accueil
    header("Location: $baseURL?p=home");
}