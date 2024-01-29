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