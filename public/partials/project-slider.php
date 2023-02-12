<section class="projects-slider">
    <div class="cta mobile-view">
        <a class="btn btn--s" href="<?php echo get_public_url('')?>work.php">Check out my other projects! 🚀</a>
    </div>
    <div class="slider">
        <a class="page-intro-heading" href="<?php echo get_public_url('')?>work.php">My Projects</a>
        <div class="flex cards card-slider">
            <?php 
                for($i=0; $i<count($projects); $i++){
                    echo '<li class="card-list-item">';
                    include('./global/card.php');
                    echo '</li>';
                }
            ?>
        </div>
    </div>
</section>