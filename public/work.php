<?php
    require_once('../src/init.php');
?>

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
        <section class="page-style projects flex">
            <div class="page-intro-heading">
                <h1>Projects</h1>
            </div>
            <div class="projects-filter">
                <ul class="flex">
                    <li data-project="all" class="filter-btn filter-btn--active">ALL</li>
                    <li data-project="design" class="filter-btn ">DESIGN</li>
                    <li data-project="development" class="filter-btn">DEVELOPMENT</li>
                </ul>
            </div>
            <div class="projects-collection">
                    <ul class="cards flex">
                        <?php 
                        // Clean up code
                            for($i=0;$i<count($projects);$i++){
                                echo '<li class="card-list-item project-filter ';
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
        </section>
    </main>
    <?php include('partials/footer.php') ?>
</body>
</html>