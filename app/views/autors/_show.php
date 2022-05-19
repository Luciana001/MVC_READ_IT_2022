<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
        <img src="assets/images/<?php echo $autor['image']; ?>" alt="<?php echo $autor['firstname']; ?>
            <?php echo $autor['lastname']; ?>" class="img-fluid mb-4">
    </div>
    <div class="desc">
        <h3>
            <?php echo $autor['firstname']; ?>
            <?php echo $autor['lastname']; ?>
        </h3>
        <p><?php echo $autor['biography']; ?></p>
    </div>
</div>