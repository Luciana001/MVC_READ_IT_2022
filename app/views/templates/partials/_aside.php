<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

    <!-- SEARCHBAR -->
    <?php include '../app/views/templates/partials/_search.php'; ?>

    <!-- LISTE DES CATEGORIES -->
    
    <?php 
        include_once '../app/models/categoriesModel.php';
        $categories = \App\Models\CategoriesModel\findAll($connexion);
        include '../app/views/categories/_index.php'; 
    ?>

    

    <div class="sidebar-box ftco-animate">
        <h3>Recent Blog</h3>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/image_1.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                        blind texts</a>
                </h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/image_2.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                        blind texts</a>
                </h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/image_3.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                        blind texts</a>
                </h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTE DES TAGS -->
    <?php 
        include_once '../app/models/tagsModel.php';
        $indexTags = \App\Models\TagsModel\findAll($connexion);
        include '../app/views/tags/index.php'; 
    ?>

</div>