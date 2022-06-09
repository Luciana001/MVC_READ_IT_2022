<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

    <!-- SEARCHBAR -->
    <?php include '../app/views/templates/partials/_search.php'; ?>

    <!-- LISTE DES CATEGORIES -->
    <?php 
        include_once '../app/models/categoriesModel.php';
        $categories = \App\Models\CategoriesModel\findAll($connexion);
        include '../app/views/categories/_index.php'; 
    ?>

    <!-- LISTE DES 3 DERNIERS POSTS -->
    <?php 
        include_once '../app/models/postsModel.php';
        $lastPosts = \App\Models\PostsModel\findRecents($connexion);
        include '../app/views/posts/_recents.php';
    ?>

    <!-- LISTE DES TAGS -->
    <?php 
        include_once '../app/models/tagsModel.php';
        $indexTags = \App\Models\TagsModel\findAll($connexion);
        include '../app/views/tags/_index.php'; 
    ?>

</div>