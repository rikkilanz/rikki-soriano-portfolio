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
        <div class="progress-bar"></div>
        <section class="project">
            <div id="topBtn" title="Go to top" class="btn btn__circle btn--top btn--orange"><img src="<?php echo get_public_url('images/')?>arrow-up.svg" alt=""></div>
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-thumb.jpg" alt="Live 2k landing page with folder icons as navigation">
            <section class="project-intro">
                <h1 class="project-title">Live 2K | Coded Website Prototype</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">WIREFRAMING</li>
                    <li class="btn btn--almond">UIUX</li>
                    <li class="btn btn--almond">CODING</li>
                </ul>
                <h2 class="project-description">A website coded for a business under the Agile Methodology Project Management.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">6 Weeks</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Visual Studio Code</p>
                        <p class="description">Adobe XD</p>
                        <p class="description">Google Suite</p>
                        <p class="description">Discord</p>
                    </li>
                    <li class="project-info-languages">
                        <h3 class="heading-info">Languages</h3>
                        <p class="description">HTML</p>
                        <p class="description">CSS</p>
                    </li>
                    <li class="project-info-links">
                        <h3 class="heading-info">Project Links</h3>
                        <ul class="project-links flex">
                            <li class="link-item">
                                <a href="https://xd.adobe.com/view/a3f5bfb8-80ba-4fc9-ac54-4a78fdbbe447-f6a6/?fullscreen" target="_blank"><img src="<?php echo get_public_url('images/')?>adobe-xd-icon.svg" alt=""></a>
                            </li>
                            <li class="link-item">
                                <a href="https://github.com/rikkilanz/live-2k" target="_blank"><img src="<?php echo get_public_url('images/')?>github-icon.svg" alt=""></a>
                            </li>
                            <li class="link-item">
                                <a href=""><img src="<?php echo get_public_url('images/')?>website-icon.svg" alt=""></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The purpose:</b> This is a term project that took about 5 weeks/half of the course timeline to create. The team of 4 members assigned roles from Project Manager, Web Developer, and Designer.</p> 
                <p class="description">The groups must use the Agile Work method of developing the product. During this project, the roles UI Designer and Developer was assigned to me.</p>
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Planning</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>During 5 weeks, we had a total of 5 Weekly Sprints to work and meet up for Sprint Planning every Fridays. During week of the sprint, we were working on our individual assigned tasks.</p>
                        <p>We used project management tools like:</p>
                        <ul class="list">
                            <li><p>Google Docs for Documentation, Research, Ideation.</p>
                            </li>
                            <li>
                            <p>Google Sheets for our Product Backlog, Sprint Events, Task List, and Project Logging.</p>
                            </li>
                            <li><p>Zoom and Discord for team meetings and communication.</p></li>
                        </ul>
                        <p>This method was fun and easy for us to go back and forth in communications and keeping up with each other. The Weekly Sprint helped us see the whole project in a bird's eye view, making big tasks to smaller ones.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Wireframing</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>When sketching the wireframes, I've used inspirations from other music festival websites. Coachella, Rolling Loud, and 88Rising helped me out ideate my wireframes.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-websites.jpg" alt="an image of concert festival websites">
                        <p class="caption">Website landing pages of Coachella, 88rising: Head in the Clouds, and Rolling Loud</p>
                        <p>When sketching the wireframes, I've used inspirations from other music festival websites. Coachella, Rolling Loud, and 88Rising helped me out ideate my wireframes. </p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-lofi-wireframe-1.jpg" alt="an image of Live 2K's low-fi wireframes for Homepage, About Page, and Tickets Page">
                        <p class="caption">Low-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-lofi-wireframe-2.jpg" alt="an image of Live 2K's low-fi wireframes for Artists Page, and Individual Artists Page">
                        <p class="caption">Low-fi wireframes for Artists Page, and Individual Artists Page</p>
                        <p>From my research, common elements throughout these websites that I implemented on my designs are: </p>
                            <ul class="list">
                                <li><p>Information organisation</p></li>
                                <li><p>Creating an experience for the user</p></li>         
                            </ul>
                        <p>I wanted to focus on the experience by bringing aesthetic UI elements of the 2000's with a modern twist by organising information with usage of “windows-style” containers.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-hifi-wireframe-1.jpg" alt="an image of Live 2K's hi-fi wireframes for Homepage, About Page, and Tickets Page"">
                        <p class="caption">Hi-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <p>Since this is a project with a 6-week time constraint, our team only stuck to produce essential pages of the website. (Home Page, Ticket Checkout Process, Artist Line-Up Page, Volunteering Form)</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-hifi-wireframe-2.jpg" alt="an image of Live 2K's hi-fi wireframes for Homepage, About Page, and Tickets Page"">
                        <p class="caption">Hi-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <div class="cta">
                            <a class="btn btn--s" href="https://xd.adobe.com/view/a3f5bfb8-80ba-4fc9-ac54-4a78fdbbe447-f6a6/?fullscreen" title="Go to Klin Klothing's mobile app protoype in Adobe XD" target="_blank">View Adobe XD prototype<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                        </div>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Coding Process</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>The coding process was a bit overwhelming at first. The Weekly Sprint Planning helped break down each major task to sub-tasks.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-live-2k-sprint.jpg" alt="an image of a spreadsheet document containing Live 2K's workload distribution">
                        <p class="caption">The third sprint iteration's tasklist</p>
                        <p>This is also the first time I've coded along with another Developer role and it was a bit of a struggle. We had to agree upon a system where when we coded together, we somehow had our files together in sync.</p>
                        <p>My developer partner and I shared the coding work by assigning what pages to work on. I've started coding the main page website/header at first to get the base website. </p>
                        <p>I coded the Home Page, Tickets Page, Artist Page, while our other developer helped create the footer section, Ethos page, and the Volunteer Sign Up form.</p>
                        <div class="cta">
                        <a class="btn btn--s" href="<?php echo get_public_url('')?>work.php">View code files at GitHub<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                    </div>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Overall, this project was really enjoyable because of its team base environment and working with the Agile Methodology. Our team could have taken advantage of other project management tools like Trello and Jira to make our workflow more smoother. </p>
                        <p>The website can be improved by organising CSS styles with SASS, and creating reusable components like cards and sections.</p>
                    </div>
                </section>
            </section>
        </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>