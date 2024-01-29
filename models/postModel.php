<?php

// On créé la fonction d'ajout d'un post en entrant les paramètres $title et $content et en renseignant $id_user.
function createPost($title, $content, $id_user, $image)
{
    // On importe la variable globale $pdo pour travailler avec
    global $pdo;
    // Essaie d'insérer un post dans la base de données.
    try {
        // PDO prépare la requête (pas un utilisateur ou une personne tièrce).
        $query = $pdo->prepare("INSERT INTO posts (title, content, id_user, image, created_at) VALUES (:t, :c, :i, :p, :a)");
        // PDO exécute la requête avec les paramètres définis (t, c et i).
        $query->execute([
            "t" => $title,
            "c" => $content,
            "i" => $id_user,
            "p" => $image,
            "a" => date("Y-m-d H:i:s")
        ]);
        // L'ajout du post fonctionne, la fonction renvoie true.
        return true;
        // Le try echoue, on affiche l'erreur et la fonction retourne false.
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
        // false arrête l'execution de la fonction.
    }
}

function getPostsCollection()
{
    global $pdo;
    try {
        $query = $pdo->prepare("SELECT * FROM posts ORDER BY created_at DESC");
        $query->execute();
        $collection = $query->fetchAll();
        return $collection;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function deletePost($id_post)
{
    try {
        global $pdo;

        $query = $pdo->prepare("DELETE FROM posts WHERE id_post = :i");
        $query->execute([
            'i' => $id_post
        ]);

        return true;

    } catch (PDOException $e) {
        echo $e->getMessage();

        return false;
    }
}