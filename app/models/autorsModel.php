<?php 

function findOneById(PDO $connexion, int $postID){
    $sql = "SELECT *
            FROM authors a
            JOIN posts p on a.id = p.author_id
            WHERE p.id = :postID;";

            $rs = $connexion->prepare($sql);
            $rs->bindValue(':postID', $postID, PDO::PARAM_INT);
            $rs->execute();

            return $rs->fetch(PDO::FETCH_ASSOC);
}