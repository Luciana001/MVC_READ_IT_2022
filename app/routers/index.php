<?php


if (isset($_GET['postId'])) :
    // Route du detail d'un post
    // Pattern: ?postId=X
    // CTRL: postsController
    // ACTION: showAction
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connexion, $_GET['postId']);


else :
    // Route par defaut
    // Pattern:  / (url = http://www....public/)
    // CTRL: postsController
    // Action: index

    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;


