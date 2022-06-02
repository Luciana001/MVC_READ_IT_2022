<?php

namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function indexAction(\PDO $connexion) {
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/index.php';
    $content = ob_get_clean();
}



function showAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/showAction.php';
    $content = ob_get_clean();
}