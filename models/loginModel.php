<?php

// On créé la fonction de connexion de l'utilisateur en spécifiant les paramètres $username et $password.
function login($username, $password)
{
    // On importe la variable globale $pdo pour travailler avec
    global $pdo;
    // Essaie de trouver l'utilisateur dans la base de données :
    try {
        // PDO prépare la requête (pas un utilisateur ou une personne tièrce).
        $query = $pdo->prepare("SELECT * FROM users WHERE username = :u");
        // Ici nous parcourons tous les utilisateurs depuis la table users pour trouver le username défini par l'utilisateur (:u) sur le formulaire.
        $query->execute([
            // PDO exécute la requête avec le paramètre défini (u).
            "u" => $username
        ]);
        // On récupère la requête.
        $user = $query->fetch();
        if ($user && password_verify($password, $user['password'])) {
            // Si la vérification de l'utilisateur et de son mot de passe fonctionne, on renseigne l'utilisateur connecté dans la variable $user et la fonction renvoie true.
            $_SESSION['user'] = $user;
            return true;
        }
        // Si l'utilisateur n'est pas trouvé, on arrête l'exécution de la fonction et il n'est pas connecté.
        return false;
    } catch (PDOException $e) {
        // Si le try echoue, on affiche l'erreur et la fonction retourne false (s'arrête).
        echo $e->getMessage();
        return false;
    }
}