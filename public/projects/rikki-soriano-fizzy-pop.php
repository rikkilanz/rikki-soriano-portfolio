<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
<?php 
    include('../partials/head.php');
?>
<body>
    <?php 
        $header_class = 'hdr--white';
        include('../partials/header.php');
    ?>
    <main>
        <div id="progress-bar"></div>
        <section class="project">
            <div id="topBtn" title="Go to top" class="btn btn__circle btn--top btn--orange"><img src="<?php echo get_public_url('images/')?>arrow-up.svg" alt=""></div>
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-thumb.jpg" alt="A mobile mock of klin klothing's UI prototype" data-lightbox="image-1">
            <section class="project-intro">
                <h1 class="project-title">Fizzy POP | Beverage Branding</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">WIREFRAMING</li>
                    <li class="btn btn--almond">UIUX</li>
                    <li class="btn btn--almond">CODING</li>
                </ul>
                <h2 class="project-description">A branding project for a fictional soda beverage company.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">4 Weeks</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Adobe Illustrator</p>
                        <p class="description">Adobe Dimension</p>
                        <p class="description">Adobe Photoshop</p>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The purpose:</b>The project goal was to come up with a fictional beverage company. The project's final deliverable requirements were a company logo and marketing posters with 3D renders of the product.</p> 
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Ideation</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>I started off by choosing to make this project for a soda beverage company. I looked at competitors such as <a href="https://www.fanta.com/" title="Go to Fanta's website" target="_blank">Fanta</a>, <a href="https://www.faygo.com/" title="Go to Faygo's website" target="_blank">Faygo</a>, <a href="https://www.crushsoda.com/" title="Go to Crush Soda's website" target="_blank">Crush</a> and <a href="https://sangaria.com/" title="Go to Sangaria's Ramune website" target="_blank">Ramune</a>. Between these brand competitors, they target younger audiences by creating products that are bright and poppy.</p>
                        <p>The mood board I came up with has a lot of bright and summery colours. I implemented these colours to the product design based on their flavours.
                        </p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-moodboard.jpg" alt="A collection of images for FizzyPOP's moodboard using Pinterest">
                        <p class="caption">Images collected to create <a href="https://pin.it/3DXUwCZ" alt="Go to FizzyPOP's Pinterest moodboard." target="_blank">moodboard for FizzyPOP made with Pinterest</a></p>
                        <p>During my ideation, I started off first by creating a mind map of the fictional company. In this mind map, I've placed keywords that relate to the brand and feeling of the company, as well as the beverage.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-mindmap.jpg" alt="FizzyPOP's mind map ideation with Text2Mindmap tool">
                        <p class="caption">FizzyPOP's mind map ideation with Text2Mindmap tool</p>
                        <p>I then created a design brief highlighting specifics of the project's target audience such as demographics, psychographics and product location. This document also highlights the design elements for the branding such as typography, colours, and shapes.
                        </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Designing</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>After the ideation process, I started to create thumbnails for the logo. The idea of the logo is to play around shapes like ovals and circles. I wanted to implement bubbly features in my design to present a very fun look to it, and feel youthful.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-thumbs.jpg" alt="an image of FizzyPOP's logo thumbnails">
                        <p class="caption">FizzyPOP's logo thumbnails</p>
                        <p>I took my chosen thumbnails afterwards to Adobe Illustrator to experiment by creating variations of one logo.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-logo-roughs.jpg" alt="an image of FizzyPOP's logo roughs">
                        <p class="caption">FizzyPOP's logo roughs made in Adobe Illustrator</p>
                        <p>I also play around with fonts that have soft edges. I then chose a sans-serif font called Paytone One because of its geometric font look as well as a prominent rounded curve which supports the bubbly feel of the brand.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-logo-final.jpg" alt="an image of FizzyPOP's final iteration of logo">
                        <p class="caption">Final logo design of FizzyPOP</p>
                        <p>For the colour, I wanted to implement a sky blue colour because it compliments with the bubbly personality of the logo and gives it that “on cloud nine” feel. This logo is also adaptable to other colours based on the beverages flavour.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Rendering</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>For the advertisement poster, I wanted to highlight the drink as the main subject. I wanted to continue the fun aspect of the brand by making giant-sized drinks that blend with the real world. By placing them in locations like by the beach or by a skate park, it supports the project's branding of fun and youthful activities.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-poster-initial.jpg" alt="an image of FizzyPOP's initial poster design">
                        <p class="caption">First iteration of FizzyPOP's poster made with 3D tools in Adobe Illustrator</p>
                        <p>Initially, we used Illustrator to render the products, but we were limited with the tools like texturing and creating camera angles. I used the perspective grid tool to create this camera angle that comes from the bottom to create this design that looks like it pops out, highlighting the products themselves with the environment they are in.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-fizzy-pop-poster-final.jpg" alt="an image of FizzyPOP's initial final design">
                        <p class="caption">Second iteration of FizzyPOP's poster made with 3D software, Adobe Dimension</p>
                        <p>Afterwards, we learned Adobe Dimension from one of our courses. Playing around 3D software like Adobe Dimension was a learning process because the camera controls were complicated. Through the process of trial and error, I managed to get a proper grasp of the camera tool.</p>
                        <p>Finding the right lighting was also hard but Adobe Dimension has a great built auto-lighting generator. I was able to set the base lighting and tweaked it based on the posters preference.</p>
                        </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>This was a very enjoyable project. I have never dived into the world of 3D softwares, and I'd say I could very well use these tools to improve my future projects.</p>
                            
                        <p>Overall the software became more fun as I played around with texturing and adding 2D elements to the 3D renders.</p>
                    </div>
                </section>
            </section>
        </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>