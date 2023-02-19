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
        <section class="about flex">
            <div class="page-intro-heading">
                <h1>About</h1>
            </div>
            <section class="about-intro">
                <div class="about-profile-image">
                    <div class="circle"></div>
                    <img src="images/rikki-soriano-profile-picture.jpg" alt="">
                </div>
                <h2 class="about-heading-text">Hi, I'm Rikki!</h2>
                <ul class="about-pills flex">
                    <li class="btn btn--almond">Designer</li>
                    <li class="btn btn--almond">Developer</li>
                    <li class="btn btn--almond">Gamer</li>
                    <li class="btn btn--almond">Music Nerd</li>
                    <li class="btn btn--almond">Hates color orange</li>
                </ul>
                <div class="about-info-tablet">
                    <p>I'm an upcoming UIUX Designer/Web Developer! I have a fiery passion for design and creative media 🧡</p>   
                    <p>Some of my hobbies are listening to 🎵 music (a lot), 🎮 gaming with friends, 👨‍🍳 cooking new dishes, and looking into different types of 👕 fashion.</p>
                    <p>💡Some of my creative inspirations: AWGE Creative Agency, Takashi Murakami, and Lyrical Lemonade.</p>
                </div>
            </section>
            <section class="about-info-mobile">
                <p>I'm an upcoming UIUX Designer/Web Developer! I have a fiery passion for design and creative media 🧡</p>   
                <p>Some of my hobbies are listening to 🎵 music (a lot), 🎮 gaming with friends, 👨‍🍳 cooking new dishes, and looking into different types of 👕 fashion.</p>
                <p>💡Some of my creative inspirations: AWGE Creative Agency, Takashi Murakami, and Lyrical Lemonade.</p>
            </section>
            <section class="about-mission">
                <h3 class="about-heading-text">My Mission</h3>
                <p class="mission-info">“Delivering works of quality and creativity for people to use for purpose and inspiration.”</p>
            </section>
            <section class="about-journey">
                <h3 class="about-heading-text">The journey so far...</h3>
                <h4 class="journey-chapter">I</h4>
                <p>After graduating high school, as every gamers dream I wanted to be a Game Developer. After a few courses, I learned that it wasn't for me because I struggled to understand how to speak like a computer (🤖 *beep boop*).</p>
                <p>While figuring out my future, I had a thought to pursue my media and design hobby because I was always intrigued on creating media and art with purpose.</p>
                <p>I am thinking of creative ways to create solutions for problems whether that'd be telling a story through video, or presenting information through visual graphics.</p>
                <h4 class="journey-chapter">II</h4>
                <p>After I graduated from BCIT with a Graphic Design Certification in 2020. It was another struggle to land a job during the pandemic. I tried my own freelance work, getting a few clients to work with.</p>
                <p>I never gave up on design. It was then I decided to take on the UIUX/Web Developer path after realizing that I could further expand my Graphic Design skills to creating amazing UI designs and bring them to life through development.</p>
                <p>I've had my doubts at first coming back to a program with coding, but I remained optimistic and design made me feel comfortable around it.</p>
                <h4 class="journey-chapter">III</h4>
                <p>Now, I enjoy coding as much as I enjoy creating designs. Design complimented Development and vice versa.</p>
                <p>Voila! It all came to a full circle in the end. The lesson?</p>
                <p>I learned to be authentic with myself after knowing that I wanted to pursue a design career path.</p> 
                <p>Learning new things like coding can be daunting.</p> 
                <p>If you have a little spark of optimism in you, things will come back in full circle and that's when you know you've grown.</p>
            </section>
            <section class="about-values">
                <h3 class="about-heading-text">My Values</h3>
                <ul class="value-list">
                    <li class="value-list-item flex">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-authenticity.svg" alt="">
                        <h4 class="value-title">Authenticity</h4>
                        <p>Taking feedback is crucial, and an authentic communication of feedback is very valuable for me when producing creative work.</p>
                    </li>
                    <li class="value-list-item flex">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-learning.svg" alt="">
                        <h4 class="value-title">Learning</h4>
                        <p>Being able to adapt new things and changes takes time. Learning for me is a crucial part of being able to grow and evolve.</p>
                    </li>
                    <li class="value-list-item flex">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-optimism.svg" alt="">
                        <h4 class="value-title">Optimism</h4>
                        <p>As an avid competitive gamer, at times when team is crunched and is mentally down, having a small optimism to win makes such a big difference.</p>
                    </li>
                </ul>
            </section>
        </section>
    <?php include('partials/project-slider.php') ?>
    </main>
    <?php include('partials/footer.php') ?>
</body>
</html>