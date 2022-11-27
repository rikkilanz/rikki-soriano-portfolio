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
                    <img src="images/rikki-soriano-terra-fortuna-thumb.jpg" alt="">
                </div>
                <div class="project__intro">
                    <h1>Terra Fortuna | Mobile Responsive Landing Page</h1>
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
                        <p><b>The purpose</b> of the project was to create a responsive website design for mobile and desktop users. Another project requirement was to implement 3 Javascript plugins for the website (Added <a href="https://flickity.metafizzy.co/" target=”_blank”>Flickity</a>, <a href="https://michu2k.github.io/Accordion/" target=”_blank”>Accordion</a>, and <a href="https://lokeshdhakar.com/projects/lightbox2/"  target=”_blank”>Lightbox-JS</a>)</p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Planning</h3>
                        <p>Before coding, there were a few requirements for this project:</p>
                        <ul class="list">
                            <li><p>Create a total of 5 sections</p></li>
                            <li><p>Implement a total of 3 Javascript plugins</p></li>
                            <li><p>Must be responsive for both mobile and desktop</p></li>
                        </ul>
                        <p>With these requirements in mind, I had to plan out how I should lay out the website's information.</p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Layout</h3>
                        <img src="images/rikki-soriano-terra-fortuna-sketch.png" alt="">
                        <p class="caption">Terra Fortuna initial website layout sketch</p>
                        <p>The content of the website is layed out to be easily responsive. All of the content is centre aligned because the purpose of the landing webpage is to show content quickly and in divided sections.</p>
                        
                        <p>I layed out the section in order of importance of information. I used the Javascript image slider plugin called <a href="https://flickity.metafizzy.co/" target=”_blank”>Flickity</a> to highlight appealing visuals for users to capture their attention. It then proceeds with the company's mission and values to reinforce the company's focus towards the users.</p>
                        
                        <p>The team is introduced afterwards, highlighting what their position is and a brief description about them. In this section, I also implemented a <a href="https://lokeshdhakar.com/projects/lightbox2/" target=”_blank”>Lightbox</a> Javascript (when you click an Image, it zooms in on your screen) to let users have the option to see the image better.</p>
                        
                        <p>Finally a FAQ Section using an <a href="https://michu2k.github.io/Accordion/" target=”_blank”>Accordion</a> Javascript plugin to easily show and hide information without crowding the UI.</p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Coding Process</h3>
                        <h4>Gallery Section</h4>
                        <p>In this section, I used the Javascript plugin Flickity. I have images that highlight house properties.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="images/rikki-soriano-terra-fortuna-flicker.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Flickity image slider on Terra Fortuna's Hero Section</p>
                        <p>At higher resolution display, the image slider is replaced with a drone video that hovers over houses which is consistent with other real estate websites. Both the slider and video plays automatically so that the user's attention would be captured easily.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="images/rikki-soriano-terra-fortuna-video.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Video displaying at higher resolution devices</p>
                        <p>This section took the most time to code because I had to play around with the code so that the image and video fit well so that it wouldn't be squished. One issue I had was that the video wasn't responding properly at different screen resolutions where it was creating unnecessary spacing at the top. I found out that the container had a top CSS attribute that was pushing it down, which I initially placed because the header was position fixed.</p>
                        <h4>Team Section</h4>
                        <p>In this section, I created a card class to contain images and corresponding information on the image. This card class was easy to reuse, especially when I have to display more than 1 person in this section.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="images/rikki-soriano-terra-fortuna-lightbox.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Lightbox.js on the website's Team Section</p>
                        <p>This section also uses the Javascript plugin, lightbox-js. This plugin highlights the images when the user clicks on it where they can read further information about them.</p>
                        <h4>FAQ Section</h4>
                        <p>In this section, I used the Javascript library jQuery to take advantage of their accordion component. An accordion fits well in this FAQ section because most questions are around 1-2 sentences with answers ranging to a few sentences.</p>
                        <video width="100%" height="100%" controls loop autoplay>
                            <source src="images/rikki-soriano-terra-fortuna-accordion.mp4" type="video/mp4">
                        </video>
                        <p class="caption">Accordion plugin at Terra Fortuna's FAQ section.</p>
                        <p>This way, we can display what the commonly asked question is while hiding any information that may distractingly populate the screen.
                        </p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Project Reflection</h3>
                        <p>This is a project that I worked on with a time constraint of 3 weeks. I would further improve this project by taking advantage of tools like Sass to organise my styles, creating more reusable components like sections, grid systems, and cards.</p>
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