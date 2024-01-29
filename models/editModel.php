<?php

function editPost($id_post, $title, $content, $image)
{
    global $pdo;
    try {
        $query= $pdo->prepare("UPDATE posts SET title = :t, content = :c, image = :p WHERE id_post = :i");
        $query->execute([
            "t" => $title,
            "c" => $content,
            "p" => $image,
            "i" => $id_post
        ]);

        return true;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}