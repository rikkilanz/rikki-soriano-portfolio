<!-- <h1>
    <?php
    // echo $projects[$i]->name;
    // echo $projects[$i]->description;
    ?>
</h1> -->

<a href="rikki-soriano-<?php echo set_name($projects[$i]->name) ?>.php">
    <div class="card">
        <div class="card__image"><img src="images/rikki-soriano-<?php echo h($projects[$i]->image_url); ?>" alt=""></div>
        <div class="card__info">
            <ul class="card__info__type">
                <?php 
                for($c=0; $c < count($projects[$c]->type); $c++){
                    print_r("<li class=\"pill pill--almond\">" . $projects[$c]->type[$c] . "</li>");
                };
                ?>
            </ul>
            <h2 class="card__info__header"><?php echo h($projects[$i]->name); ?></h2>
            <p class="card__info__description"><?php echo h($projects[$i]->description); ?></p>
        </div>
    </div>
</a>
