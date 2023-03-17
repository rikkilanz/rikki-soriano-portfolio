<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $page_title = 'Rikki Soriano - Terra Fortuna | Mobile Responsive Landing Page';
    $page_desc = 'A mobile first responsive real estate website coded with HTML, CSS and JS.';
    include('../partials/head.php');
?>
<body>
    <?php 
        $header_class = 'hdr--white';
        include('../partials/header.php');
    ?>
    <main>
        <div class="progress-bar"></div>
        <section class="project">
            <div id="topBtn" title="Go to top" class="btn btn__circle btn--top btn--orange"><img src="<?php echo get_public_url('images/')?>arrow-up.svg" alt=""></div>
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-thumb.jpg" alt="A desktop and mobile mockup of Terra Fortuna's website">
            <section class="project-intro">
                <h1 class="project-title">Forward Platform | Mobile Responsive Landing Page</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">CODING</li>
                    <li class="btn btn--almond">UIUX</li>
                </ul>
                <h2 class="project-description">Forward is a platform that helps local tech industry professionals and new-comers build communities and connections with each other.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">2 Weeks</p>
                    </li>
                    <li class="project-info-languages">
                        <h3 class="heading-info">Languages</h3>
                        <p class="description">HTML</p>
                        <p class="description">CSS</p>
                        <p class="description">JS</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Adobe Illustrator</p>
                        <p class="description">Visual Studio Code</p>
                    </li>
                    <li class="project-info-links">
                        <h3 class="heading-info">Project Links</h3>
                        <ul class="project-links flex">
                            <li class="link-item">
                                <a href="https://github.com/rikkilanz/terra-fortuna" target="_blank"><img src="<?php echo get_public_url('images/')?>github-icon.svg" alt="Check out the code files for Terra Fortuna Website"></a>
                            </li>
                            <li class="link-item">
                                <a href="https://rikkilanz.github.io/terra-fortuna/" target="_blank"><img src="<?php echo get_public_url('images/')?>website-icon.svg" alt="Check out the website prototype"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The purpose:</b> of the project was to create a responsive website design for mobile and desktop users.</p>
                <p class="description">Another project requirement was to implement 3 Javascript plugins for the website (Added <a href="https://flickity.metafizzy.co/" title="Go to Flickity's page" target=”_blank”>Flickity</a>, <a href="https://michu2k.github.io/Accordion/" title="Go to Accordion-JS page" target=”_blank”>Accordion</a>, and <a href="https://lokeshdhakar.com/projects/lightbox2/" title="Go to Lightbox-JS page" target=”_blank”>Lightbox-JS</a>)</p>
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Planning</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Before coding, there were a few requirements for this project:</p>
                        <ul class="list">
                            <li><p>Create a total of 5 sections</p></li>
                            <li><p>Implement a total of 3 Javascript plugins</p></li>
                            <li><p>Must be responsive for both mobile and desktop</p></li>
                        </ul>
                        <p>With these requirements in mind, I had to plan out how I should lay out the website's information.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Layout</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>The content of the website is layed out to be easily responsive. All of the content is centre aligned because the purpose of the landing webpage is to show content quickly and in divided sections.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-sketch.png" alt="A sketch of Terra Fortuna's website layout">
                        <p class="caption">Terra Fortuna initial website layout sketch</p>
                        
                        <p>I layed out the section in order of importance of information. I used the Javascript image slider plugin called <a href="https://flickity.metafizzy.co/" title="Go to Flickity's page" target=”_blank”>Flickity</a> to highlight appealing visuals for users to capture their attention. It then proceeds with the company's mission and values to reinforce the company's focus towards the users.</p>
                        
                        <p>The team is introduced afterwards, highlighting what their position is and a brief description about them. In this section, I also implemented a <a href="https://lokeshdhakar.com/projects/lightbox2/" title="Go to Lightbox-JS page" target=”_blank”>Lightbox</a> Javascript (when you click an Image, it zooms in on your screen) to let users have the option to see the image better.</p>
                        
                        <p>Finally a FAQ Section using an <a href="https://michu2k.github.io/Accordion/" title="Go to Accordion-JS page" target=”_blank”>Accordion</a> Javascript plugin to easily show and hide information without crowding the UI.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Coding Process</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <h4 class="article-section-subheading">Gallery Section</h4>
                        <p>In this section, I used the Javascript plugin Flickity. I have images that highlight house properties.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-flicker.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Flickity image slider on Terra Fortuna's Hero Section</p>
                        <p>At higher resolution display, the image slider is replaced with a drone video that hovers over houses which is consistent with other real estate websites. Both the slider and video plays automatically so that the user's attention would be captured easily.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-video.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Video displaying at higher resolution devices</p>
                        <p>This section took the most time to code because I had to play around with the code so that the image and video fit well so that it wouldn't be squished. One issue I had was that the video wasn't responding properly at different screen resolutions where it was creating unnecessary spacing at the top. I found out that the container had a top CSS attribute that was pushing it down, which I initially placed because the header was position fixed.</p>
                    </div>
                    <div class="article-section-content">
                        <h4 class="article-section-subheading">Team Section</h4>
                        <p>In this section, I created a card class to contain images and corresponding information on the image. This card class was easy to reuse, especially when I have to display more than 1 person in this section.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-lightbox.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Lightbox.js on the website's Team Section</p>
                        <p>This section also uses the Javascript plugin, lightbox-js. This plugin highlights the images when the user clicks on it where they can read further information about them.</p>
                    </div>
                    <div class="article-section-content">
                        <h4 class="article-section-subheading">FAQ Section</h4>
                        <p>In this section, I used the Javascript library jQuery to take advantage of their accordion component. An accordion fits well in this FAQ section because most questions are around 1-2 sentences with answers ranging to a few sentences.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="<?php echo get_public_url('images/')?>rikki-soriano-terra-fortuna-accordion.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Accordion plugin at Terra Fortuna's FAQ section.</p>
                        <p>This way, we can display what the commonly asked question is while hiding any information that may distractingly populate the screen.
                        </p>
                    </div>
                    <div class="cta">
                        <a class="btn btn--s" href="https://rikkilanz.github.io/terra-fortuna/" title="View code files at GitHub" target="_blank">View code files at GitHub<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                    <p>This is a project that I worked on with a time constraint of 3 weeks. I would further improve this project by taking advantage of tools like <a href="https://sass-lang.com/" title="Go to Sass' page" target="_blank">Sass</a> to organise my styles, creating more reusable components like sections, grid systems, and cards.</p>
                    </div>
                </section>
            </section>
    </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>