<section class="projects-other">
    <div class="container grid">
        <a class="title" href="work.php">Check out my other projects! 🚀</a>
        <div class="cards grid">
            <?php 
                for($i=0; $i<count($projects); $i++){
                    // include('global/card.php');
                    echo '<li class="card-list-item">';
                    include('global/card.php');
                    echo '</li>';
                }
            ?>
        </div>
    </div>
</section>