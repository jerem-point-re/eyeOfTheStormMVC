<?php

function registerAction()
{
    global $baseURL;
    if ($_POST) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username && $password) {
            $result = register($username, $password);
            if ($result) {
                header("Location: $baseURL?p=login");
            } else {
                echo "Erreur lors de l'enregistrement";
            }
        }
    }
    showRegisterPage();
}