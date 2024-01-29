<?php

// On créé la fonction d'enregistrement de l'utilisateur en spécifiant (demandant) les paramètres $username et $password.
function register($username, $password)
{
    // On importe la variable globale $pdo pour travailler avec
    global $pdo;
    // Essaie d'insérer un utilisateur dans la base de données.
    try {
        // PDO prépare la requête (pas un utilisateur ou une personne tièrce).
        $query = $pdo->prepare("INSERT INTO users (username, password) VALUES (:u, :p)");
        // PDO exécute la requête avec les paramètres définis (u et p).
        $query->execute([
            "u" => $username,
            "p" => password_hash($password, PASSWORD_DEFAULT),
            // La fonction password_hash sécurise le mot de passe ($password) entré par l'utilisateur avec le paramètre PASSWORD_DEFAULT qui est une protection implémentée par la fonction password_hash.
        ]);
        // Si l'ajout de l'utilisateur fonctionne, la fonction renvoie true.
        return true;
    } catch (PDOException $e) {
        // Si le try echoue, on affiche l'erreur et la fonction retourne false.
        echo $e->getMessage();
        // false arrête l'execution de la fonction.
        return false;
    }
}