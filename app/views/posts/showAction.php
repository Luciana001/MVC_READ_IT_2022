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

<div class="pt-5 mt-5">
<!-- COMMENTS -->

<?php
    include_once '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connexion, $id);
    include '../app/views/comments/_indexByPostId.php';
?>
<!-- END comment-list -->

<!-- FORMULAIRE DE COMMENTAIRE -->

<?php include '../app/views/comments/_form.php';?>
</div>