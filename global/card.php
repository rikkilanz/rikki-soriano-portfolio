    <div class="card">
        <a class="card__link" href="rikki-soriano-<?php echo set_name($projects[$i]->name) ?>.php">
        <div class="card__image"><img src="images/rikki-soriano-<?php echo h($projects[$i]->image_url); ?>" alt=""></div>
        <div class="card__info">
            <ul class="card__info__type">
                <?php 
                for($c=0; $c < count($projects[$i]->type); $c++){
                    print_r("<li class=\"pill pill--almond\">" . $projects[$i]->type[$c] . "</li>");
                };
                ?>
            </ul>
            <h2 class="card__info__header"><?php echo h($projects[$i]->name); ?></h2>
            <p class="card__info__description"><?php echo h($projects[$i]->description); ?></p>
        </div>
        </a>
    </div>
