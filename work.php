<!DOCTYPE html>
<html lang="en-CA">
<?php include('partials/head.php') ?>
<body>
    <?php 
        $header_class = 'hdr-main';
        include('partials/header.php');
    ?>
    <main>
        <section class="works">
            <div class="flex container">
                <div class="intro">
                    <h1>Projects</h1>
                </div>
                <div class="project-collection">
                    <div class="filter-btns">
                        <ul>
                            <li class="pill active">ALL</li>
                            <li class="pill">DESIGN</li>
                            <li class="pill">DEVELOPMENT</li>
                        </ul>
                    </div>
                    <div class="cards">
                        <ul class="cards-list flex">
                            <?php 
                                for($i=0; $i<6; $i++){
                                    echo '<li class="card-list-item">';
                                    include('global/card.php');
                                    echo '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('partials/footer.php') ?>
    <script src="scripts/main.js">
    </script>
</body>
</html>