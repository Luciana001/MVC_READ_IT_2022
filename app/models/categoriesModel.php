<?php 

namespace App\Models\CategoriesModel;

function findAll(\PDO $connexion){
    $sql = "SELECT *
            FROM categories ;";

    $rs = $connexion -> query($sql); // pas besoin de preparer la requête, aucune info ne vient de l'utilisateur pour effectuer la requête
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}