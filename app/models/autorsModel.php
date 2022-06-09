<?php 

namespace App\Models\AutorsModel;

function findOneById(\PDO $connexion, int $id){
    $sql = "SELECT *, a.image as imageAutor, p.image as imagePost
            FROM authors a
            JOIN posts p on p.author_id = a.id
            WHERE p.id = :id;";

            $rs = $connexion->prepare($sql);
            $rs->bindValue(':id', $id, \PDO::PARAM_INT);
            $rs->execute();

            return $rs->fetch(\PDO::FETCH_ASSOC);
}
