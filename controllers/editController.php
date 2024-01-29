<?php

function editAction()
{
    global $baseURL;

    if ($_POST) {
        if (isset($_POST['postID'])) {
            $id_post = $_POST['postID'];
            $title = $_POST['titleEdit'];
            $content = $_POST['contentEdit'];
            $image = $_POST['imageEdit'];

            $result = editPost($id_post, $title, $content, $image);

            if ($result) {
                header("Location: $baseURL?p=home");
            } else {
                echo 'Veuillez vérifier les champs';
            }
        }
    }

    showEditPage();
}