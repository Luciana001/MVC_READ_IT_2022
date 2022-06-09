<div class="sidebar-box ftco-animate">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
            <?php foreach($indexTags as $indexTag): ?>
            <a href="#" class="tag-cloud-link">
                <?php echo $indexTag['name']; ?>
            </a>
            <?php endforeach ?>
        </div>
    </div>