<!DOCTYPE html>
<html lang="en-CA">
<?php include('partials/head.php') ?>
<body>
    <?php 
        $header_class = 'hdr-main';
        include('partials/header.php') 
    ?>
    <main>
        <section class="about">
            <div class="about__header">
                <h1>About</h1>
            </div>
            <div class="container flex">
                <div class="about__section grid">
                    <div class="about__intro flex">
                        <h2>Hi, I'm Rikki!</h2>
                        <ul class="about__pills flex">
                            <li class="pill pill--orange">Designer</li>
                            <li class="pill pill--orange">Developer</li>
                            <li class="pill pill--almond">Music Nerd</li>
                            <li class="pill pill--almond">Gamer</li>
                            <li class="pill pill--almond">Loves color orange</li>
                        </ul>
                    </div>
                    <div class="about__profile-picture">
                        <img src="images/rikki-soriano-profile-picture.jpg" alt="">
                    </div>
                </div>
                <div class="about__info">
                    <p>I'm an upcoming UIUX Designer/Web Developer! I've always had passion for media and design ever since highschool.</p>   
                    <p>📮 I was a Graphic Design graduate of 2020 from BCIT. Afterwards, it was a struggle to land a job so I created my own freelancing work. I then decided to take on the UIUX/Web Developer after realizing that I could further expand my Graphic Design skills to creating amazing UI designs and hand-coding them and brind ideas to life!</p>
                    <p>I want to deliver my work for people to use whether as a usability purpose or even just for inspirations.</p>
                    <p>Some of my hobbies are listening to 🎵 music (a lot), 🎮 gaming with friends, 👨‍🍳 cooking new dishes, and looking into different types of 👕 fashion.</p>
                    <p>💡Some of my creative inspirations: AWGE Creative Agency, Takashi Murakami, and Lyrical Lemonade.</p>
                </div>
            </div>
        </section>
    </main>
    <?php include('partials/footer.php') ?>
</body>
</html>