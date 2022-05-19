<?php

function indexAction(PDO $connexion) {
    include_once '../app/models/postsModel.php';
    $posts = findAll($connexion);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $post = findOneById($connexion, $id);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/showAction.php';
    $content = ob_get_clean();
}