<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $page_title = 'About | Rikki Soriano, Front-End Developer & UIUX Designer';
    include('partials/head.php');
?>
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
                        <div class="about__info">
                            <p>I'm an upcoming UIUX Designer/Web Developer! I have a fiery passion for design and creative media 🧡</p>   
                            <p>Some of my hobbies are listening to 🎵 music (a lot), 🎮 gaming with friends, 👨‍🍳 cooking new dishes, and looking into different types of 👕 fashion.</p>
                            <p>💡Some of my creative inspirations: AWGE Creative Agency, Takashi Murakami, and Lyrical Lemonade.</p>
                        </div>
                    </div>
                    <div class="about__profile-picture">
                        <img src="images/rikki-soriano-profile-picture.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="about__mission">
            <h3>Mission</h3>
            <p>“Delivering works of quality and creativity for people to use for purpose and inspiration.”</p>
        </section>
        <section class="about">
            <div class="container flex">
                <div class="about__section grid">
                    <div class="about__story">
                        <h3>The journey so far...</h3>
                        <h4>I</h4>
                        <hr>
                        <p>After graduating high school, as every gamers dream I wanted to be a Game Developer. After a few courses, I learned that it wasn't for me because I struggled to understand how to speak like a computer (🤖 *beep boop*).</p>
                        <p>While figuring out my future, I had a thought to pursue my media and design hobby because I was always intrigued on creating media and art with purpose.</p>
                        <p>I am thinking of creative ways to create solutions for problems whether that'd be telling a story through video, or presenting information through visual graphics.</p>
                        <h4>II</h4>
                        <hr>
                        <p>After I graduated from BCIT with a Graphic Design Certification in 2020. It was another struggle to land a job during the pandemic. I tried my own freelance work, getting a few clients to work with.</p>
                        <p>I never gave up on design. It was then I decided to take on the UIUX/Web Developer path after realizing that I could further expand my Graphic Design skills to creating amazing UI designs and bring them to life through development.</p>
                        <p>I've had my doubts at first coming back to a program with coding, but I remained optimistic and design made me feel comfortable around it. </p>
                        <h4>III</h4>
                        <hr>
                        <p>Now, I enjoy coding as much as I enjoy creating designs. Design complimented Development and vice versa. </p>
                        <p>Voila! It all came to a full circle in the end. <b>The lesson?</b> I learned to be authentic with myself after knowing that I wanted to pursue a design career path. Learning new things like coding can be daunting. If you have a little spark of optimism in you, things will come back in full circle and that's when you know you've grown.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__values">
            <h3>My Values</h3>
            <div class="authenticity flex">
                <div class="value">
                    <img src="images/rikki-soriano-authenticity.svg" alt="">
                    <h4>Authenticity</h4>
                </div>
                <div class="value-info">
                    <p>Taking feedback is crucial, and an authentic communication of feedback is very valuable for me when producing creative work.</p>
                </div>
            </div>
            <div class="learning flex">
                <div class="value">
                    <img src="images/rikki-soriano-learning.svg" alt="">
                    <h4>Learning</h4>
                </div>
                <div class="value-info">
                    <p>Being able to adapt new things and changes takes time. Learning for me is a crucial part of being able to grow and evolve.</p>
                </div>
            </div>
            <div class="optimism flex">
                <div class="value">
                    <img src="images/rikki-soriano-optimism.svg" alt="">
                    <h4>Optimism</h4>
                </div>
                <div class="value-info">
                    <p>As an avid competitive gamer, at times when team is crunched and is mentally down, having a small optimism to win makes such a big difference.</p>
                </div>
            </div>
        </section>
    <?php include('partials/project-slider.php') ?>
    </main>
    <?php include('partials/footer.php') ?>
</body>
</html>