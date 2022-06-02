<p class="mb-5">
    <img src="assets/images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>
<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>

<!-- TAGS -->
<?php
    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAllByPostId($connexion, $post['id']);
    include '../app/views/tags/_indexByPostId.php';
?>

<!-- AUTHORS -->
<?php
    include_once '../app/models/autorsModel.php';
    $autor = \App\Models\AutorsModel\findOneById($connexion, $id);
    include '../app/views/autors/_show.php';
?>

<!-- COMMENTS -->

<?php
    include_once '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connexion, $id);
    include '../app/views/comments/_indexByPostId.php';
?>
    <!-- END comment-list -->

    <!-- FORMULAIRE DE COMMENTAIRE -->

    <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="postId" value="4" />
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
    </div>
</div>