<?php

function findAll(PDO $connexion) {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at desc
            LIMIT 10;";

    $rs = $connexion -> query($sql); // pas besoin de preparer la requête, aucune info ne vient de l'utilisateur pour effectuer la requête
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";

    $rs = $connexion -> prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
