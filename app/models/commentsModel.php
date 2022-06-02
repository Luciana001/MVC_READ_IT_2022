<?php 

namespace App\Models\CommentsModel;

function findAllByPostId(\PDO $connexion, int $id){
    
    $sql = "SELECT *
            FROM comments 
            WHERE post_id  = :id
            ORDER BY created_at DESC;";

            $rs = $connexion->prepare($sql);
            $rs->bindValue(":id", $id, \PDO::PARAM_INT);
            $rs->execute();

            return $rs->fetchAll(\PDO::FETCH_ASSOC);
};