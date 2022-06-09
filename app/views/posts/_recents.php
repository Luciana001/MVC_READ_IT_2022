<div class="sidebar-box ftco-animate">
        <h3>Recent Blog</h3>
        <?php foreach($lastPosts as $lastPost): ?>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/<?php echo $lastPost['postImage'];?>);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">
                    <?php echo $lastPost['title'];?>
                </a>
                </h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 
                        <?php 
                            echo \Core\Functions\getFormatedDate($lastPost['created_at'],"F. d, Y");
                        ?>
                    </a></div>
                    <div><a href="#">
                        <span class="icon-person"></span> <?php echo $lastPost['firstname']; echo $lastPost['lastname'];?>
                    </a></div>
                    <div><a href="#">
                        <span class="icon-chat"></span>
                        <?php echo $lastPost['nbrComments'];?>
                    </a></div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>