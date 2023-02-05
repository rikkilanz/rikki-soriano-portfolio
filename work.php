<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $page_title = 'Projects | Rikki Soriano, Front-End Developer & UIUX Designer';
    include('partials/head.php');
?>
<body>
    <?php 
        $header_class = 'hdr--white';
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
                            <li data-project="all" class="filter-btn pill active">ALL</li>
                            <li data-project="design" class="filter-btn pill">DESIGN</li>
                            <li data-project="development" class="filter-btn pill">DEVELOPMENT</li>
                        </ul>
                    </div>
                    <div class="cards">
                        <ul class="cards-list flex">
                            <?php 
                            // Clean up code
                                for($i=0;$i<count($projects);$i++){
                                    echo '<li class="card-list-item project-filter ';
                                    // Fix filtering method, not fully functional
                                    if($projects[$i]->type[0] == 'CODING'){
                                        echo 'development'; 
                                    } elseif($projects[$i]->type[0] == 'UIUX' || 'GRAPHICS'){
                                        echo 'design';
                                    }else {
                                        echo 'all';
                                    }
                                    echo '">';
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
</body>
</html>