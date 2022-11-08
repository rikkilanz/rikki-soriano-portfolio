<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rikki Soriano | Front-End Developer | Designer</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
</head>
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
                            <li class="card-list-item">
                                <a href="">
                                <div class="card">
                                    <img class="card-image" src="images/placeholder-thumb.jpg" alt="">
                                    <div class="card-info">
                                        <ul class="type">
                                            <li>{PROJECT_TYPE}</li>
                                            <li>{PROJECT_TYPE}</li>
                                        </ul>
                                        <h2>{PROJECT_NAME}</h2>
                                        <p>{PROJECT_DESCRIPTION}</p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-list-item">
                                <a href="">
                                <div class="card">
                                    <img class="card-image" src="images/placeholder-thumb.jpg" alt="">
                                    <div class="card-info">
                                        <ul class="type">
                                            <li>{PROJECT_TYPE}</li>
                                            <li>{PROJECT_TYPE}</li>
                                        </ul>
                                        <h2>{PROJECT_NAME}</h2>
                                        <p>{PROJECT_DESCRIPTION}</p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-list-item">
                                <a href="">
                                <div class="card">
                                    <img class="card-image" src="images/placeholder-thumb.jpg" alt="">
                                    <div class="card-info">
                                        <ul class="type">
                                            <li>{PROJECT_TYPE}</li>
                                            <li>{PROJECT_TYPE}</li>
                                        </ul>
                                        <h2>{PROJECT_NAME}</h2>
                                        <p>{PROJECT_DESCRIPTION}</p>
                                    </div>
                                </div>
                                </a>
                            </li>
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