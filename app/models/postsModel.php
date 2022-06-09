<?php

namespace App\Models\PostsModel;

function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at desc
            LIMIT 10;";

    $rs = $connexion -> query($sql); // pas besoin de preparer la requête, aucune info ne vient de l'utilisateur pour effectuer la requête
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";

    $rs = $connexion -> prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}


function findRecents(\PDO $connexion) {
    $sql = "SELECT p.title, p.created_at, p.image as postImage, p.id as postId, COUNT(c.id) as nbrComments, a.firstname, a.lastname
            FROM posts p
            JOIN authors a on p.author_id = a.id
            LEFT JOIN comments c on p.id = c.post_id
            GROUP BY p.id
            ORDER BY p.created_at desc
            LIMIT 3;";

    $rs = $connexion -> query($sql); // pas besoin de preparer la requête, aucune info ne vient de l'utilisateur pour effectuer la requête
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}