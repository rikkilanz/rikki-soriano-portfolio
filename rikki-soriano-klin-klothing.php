<!DOCTYPE html>
<html lang="en-CA">
<?php include('partials/head.php') ?>
<body>
    <?php 
        $header_class = 'hdr-main';
        include('partials/header.php') 
    ?>
    <main>
        <section class="project">
            <div class="container grid">
                <div class="project__image">
                    <img src="images/rikki-soriano-klin-klothing.jpg" alt="">
                </div>
                <div class="project__intro">
                    <h1>Terra Fortuna Mobile Responsive Landing Page</h1>
                    <p>A mobile first responsive website coded with HTML, CSS and JS.</p>
                    <ul class="project__type">
                        <li class="pill pill--almond">CODING</li>
                        <li class="pill pill--almond">UIUX</li>
                    </ul>
                </div>
                <div class="project__info">
                    <div class="project__timeline">
                        <h4>Timeline</h4>
                        <p>2 Weeks</p>
                    </div>
                    <div class="project__tools">
                        <h4>Tools Used</h4>
                        <ul>
                            <li>Adobe Illustrator</li>
                            <li>Visual Studio Code</li>
                        </ul>
                    </div>
                    <div class="project__languages">
                        <h4>Languages</h4>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JS</li>
                        </ul>
                    </div>
                </div>
                <div class="project__process">
                    <div class="box">
                        <p><b>The purpose</b> of the project was to create a responsive website design for mobile and desktop users. Another project requirement was to implement 3 Javascript plugins for the website (Added Slick Slider, Accordion, and Lightbox-JS)</p>
                    </div>
                    <div class="box">
                        <h3>Coding Process</h3>
                        <p>I started coding the header first to be mobile responsive. During this, I also created a hamburger menu with Javascript as a project requirement. Afterwards, I started sectioning the contents and added necessary Javascript plugins for the functionality.</p>
                            
                        <p>As a project bonus, we were to add a video media when the browser reaches a desktop size. This was a struggle since the video was added as a background and doesn't size responsively (which I managed to do afterwards.)</p>
                    </div>
                    <div class="box">
                        <h3>Wireframing</h3>
                        <p>The content of the website is layed out to be easily responsive. All of the content is center aligned because the purpose of the landing webpage is just to show content quick and in divided sections.</p>
                        
                        <p>The website is layed out base on information hierarchy. I used a gallery slider to highlight appealing visuals for users to capture their attention. It's proceeded with the companys mission and values to reinforce towards the users what the company's focus is on.</p>
                        
                        <p>The team is introduced afterwards, highlighting what they work as and a brief description about them. In this section, I also implemented on a Lightbox Javascript (when you click an Image, it zooms in your screen) to let users have the option see the image better.</p>
                        
                        <p>Finally a FAQ Section using an Accordion Javascript plugin to easily show and hide information without crowding the UI.</p>
                    </div>
                    <div class="box">
                        <img src="images/rikki-soriano-terra-fortuna-logo-process.jpg" alt="">
                        <h3>Design Process - Logo</h3>
                        <p>The approach for the logo design is create this premium, royalty look that I thought of for the brand.Explored different types script fonts to achieve that majestic look.</p>
                        <p>I chose Luna Sans for the full text which gives this premium look with it's letter terminals. For the icon, I used the font Altesse for it's cleaner flow, with thicker stems, and thinner terminals.</p>
                    </div>
                    <div class="box">
                        <h3>Design Process - Website Style Tile</h3>
                        <p>The goal for the website aesthetic is carry on the premium/royalty feel. I think that the dark blue just compliments the gold color of the logo really well.</p>
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