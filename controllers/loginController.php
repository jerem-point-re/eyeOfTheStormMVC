<?php

function loginAction()
{
    global $baseURL;
    if ($_POST && $_POST['username'] && $_POST['password']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = login($username, $password);
        if ($result) {
            header("Location: $baseURL");
        } else {
            echo "Erreur lors de la connexion";
        }
    }
    showLoginPage();
}