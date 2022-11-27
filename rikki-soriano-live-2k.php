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
                    <img src="images/rikki-soriano-live-2k-thumb.jpg" alt="">
                </div>
                <div class="project__intro">
                    <h1>Live 2K | Coded Website Prototype</h1>
                    <p>A website coded for a business under the Agile Methodology Project Management</p>
                    <ul class="project__type">
                        <li class="pill pill--almond">WIREFRAMING</li>
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
                            <li>Visual Studio Code</li>
                            <li>Adobe XD</li>
                            <li>Google Suite</li>
                            <li>Google Drive</li>
                            <li>Discord</li>
                        </ul>
                    </div>
                    <div class="project__languages">
                        <h4>Languages</h4>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                        </ul>
                    </div>
                </div>
                <div class="project__process">
                    <div class="box">
                        <p><b>The purpose: </b>This is a term project that took about 5 weeks/half of the course timeline to create. The team of 4 members assigned roles from Project Manager, Web Developer, and Designer.</p>
                        <p>The groups must use the Agile Work method of developing the product. During this project, the roles UI Designer and Developer was assigned to me.</p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Project Planning</h3>
                        <p>
                            During 5 weeks, we had a total of 5 Weekly Sprints to work and meet up for Sprint Planning every
                            Fridays. During week of the sprint, we were working on our individual assigned tasks.
                        </p>
                        <p>
                            We used project management tools like:
                            <ul class="list">
                                <li><p>Google Docs for Documentation, Research, Ideation.</p>
                                </li>
                                <li>
                                <p>Google Sheets for our Product Backlog, Sprint Events, Task List, and Project Logging.</p>
                                </li>
                                <li><p>Zoom and Discord for team meetings and communication.</p></li>
                            </ul>
                        </p>
                        <p>
                            This method was fun and easy for us to go back and forth in communications and keeping up with
                            each other. The Weekly Sprint helped us see the whole project in a bird's eye view, making big tasks
                            to smaller ones.
                        </p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Wireframing</h3>
                        <p>When sketching the wireframes, I've used inspirations from other music festival websites. Coachella, Rolling Loud, and 88Rising helped me out ideate my wireframes. </p>
                        <img src="images/rikki-soriano-live-2k-websites.jpg" alt="">
                        <p class="caption">Website landing pages of Coachella, 88rising: Head in the Clouds, and Rolling Loud</p>
                        <p>When sketching the wireframes, I've used inspirations from other music festival websites. Coachella, Rolling Loud, and 88Rising helped me out ideate my wireframes. </p>
                        <img src="images/rikki-soriano-live-2k-lofi-wireframe-1.jpg" alt="">
                        <p class="caption">Low-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <img src="images/rikki-soriano-live-2k-lofi-wireframe-2.jpg" alt="">
                        <p class="caption">Low-fi wireframes for Artists Page, and Individual Artists Page</p>
                        <p>From my research, common elements throughout these websites that I implemented on my designs are: </p>
                            <ul class="list">
                                <li><p>Information organisation</p></li>
                                <li><p>Creating an experience for the user</p></li>         
                            </ul>
                        <p>I wanted to focus on the experience by bringing aesthetic UI elements of the 2000's with a modern twist by organising information with usage of “windows-style” containers.</p>
                        <img src="images/rikki-soriano-live-2k-hifi-wireframe-1.jpg" alt="">
                        <p class="caption">Hi-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <p>Since this is a project with a 6-week time constraint, our team only stuck to produce essential pages of the website. (Home Page, Ticket Checkout Process, Artist Line-Up Page, Volunteering Form)</p>
                        <img src="images/rikki-soriano-live-2k-hifi-wireframe-2.jpg" alt="">
                        <p class="caption">Hi-fi wireframes for Homepage, About Page, and Tickets Page</p>
                        <a class="cta pill pill--orange" href="#">Check out the prototype here!</a>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Coding Process</h3>
                        <p>The coding process was a bit overwhelming at first. The Weekly Sprint Planning helped break down each major task to sub-tasks.</p>
                        <img src="images/rikki-soriano-live-2k-sprint.jpg" alt="">
                        <p class="caption">The third sprint iteration's tasklist</p>
                        <p>This is also the first time I've coded along with another Developer role and it was a bit of a struggle. We had to agree upon a system where when we coded together, we somehow had our files together in sync.</p>
                        <p>My developer partner and I shared the coding work by assigning what pages to work on. I've started coding the main page website/header at first to get the base website. </p>
                        <p>I coded the Home Page, Tickets Page, Artist Page, while our other developer helped create the footer section, Ethos page, and the Volunteer Sign Up form.</p>
                    </div>
                    <hr>
                    <div class="box">
                        <h3>Project Reflection</h3>
                        <p>Overall, this project was really enjoyable because of its team base environment and working with the Agile Methodology. Our team could have taken advantage of other project management tools like Trello and Jira to make our workflow more smoother. </p>
                        <p>The website can be improved by organising CSS styles with SASS, and creating reusable components like cards and sections.</p>
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