<?php
    require('../src/init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $header_class = 'hdr--orange'; 
    include('partials/head.php');
?>
<body>
    <?php include('partials/header.php') ?>
    <main>
        <section class="page-not-found">
            <div class="page-not-found-image">
                <img src="<?php echo get_public_url('images/')?>404-shape.svg" alt="">
            </div>
            <div class="page-not-found-info">
                <h1 class="intro__title">You must be lost!?</h1>
                <div class="cta desktop-cta"><a class="btn btn--s" href="index.php">Quick! press this button to make everything okay :)</a></div>
            </div>
        </section>
    </main>
    <?php include('partials/footer.php') ?>
</body>
</html>