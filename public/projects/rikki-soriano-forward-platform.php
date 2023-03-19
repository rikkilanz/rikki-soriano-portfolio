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
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-forward-platform-thumb.jpg" alt="A desktop and mobile mockup of Terra Fortuna's website">
            <section class="project-intro">
                <h1 class="project-title">Forward Platform | Mobile Responsive Landing Page</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">CODING</li>
                    <li class="btn btn--almond">HTML</li>
                    <li class="btn btn--almond">PHP</li>
                    <li class="btn btn--almond">CSS</li>
                </ul>
                <h2 class="project-description">Forward is a platform that helps local tech industry professionals and new-comers build communities and connections with each other.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">24 Hours</p>
                    </li>
                    <li class="project-info-languages">
                        <h3 class="heading-info">Languages</h3>
                        <p class="description">HTML</p>
                        <p class="description">CSS</p>
                        <p class="description">PHP</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Visual Studio Code</p>
                        <p class="description">Figma</p>
                        <p class="description">MAMP</p>
                    </li>
                    <li class="project-info-links">
                        <h3 class="heading-info">Project Links</h3>
                        <ul class="project-links flex">
                            <li class="link-item">
                                <a href="https://github.com/rikkilanz/hackathon-2023" target="_blank"><img src="<?php echo get_public_url('images/')?>github-icon.svg" alt="Check out the code files for Forward"></a>
                            </li>
                            <li class="link-item">
                                <a href="https://forward.marlowecheng.com/public/" target="_blank"><img src="<?php echo get_public_url('images/')?>website-icon.svg" alt="Check out the website prototype"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The objective:</b> is to develop a website that addresses a challenge presented by the theme of the Hackathon event.</p>
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Go Forward!</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Forward connects local mentors and mentees by matching them based on compatibility using user-entered survey information. Forward also offers a Community Hub where users could post their work and join their peers in discussions about their specialties and interests.</p>
                        <iframe width="100%" height="auto" style="aspect-ratio: 16/9" src="https://www.youtube.com/embed/BtKzdFMZmG4" title="Forward | 1st Place Winner for BCIT's Hack the Break 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p>Built by mentees, for mentors & peers, Forward helps local tech industry professionals and new-comers build communities and connections with each other.</p>
                        <p>This project was built by a team of first-time hackers for <a href="https://hack-the-break-2023.devpost.com/" title="BCIT's Hack the Break 2023" target="_blank">BCIT's Hack the Break 2023</a> and was awarded first place. The team consisted of:</p>
                        <ul class="list">
                            <li><p><a href="https://kayla-tran.design/" title="Visit Kayla Tran's portfolio" target="_blank">Kayla Tran</a> - UI/UX Design, Graphic Design</p></li>
                            <li><p><a href="https://karinasong.com/" title="Visit Karina Song's portfolio" target="_blank">Karina Song</a> - Full-Stack Developer, Copywriting</p></li>
                            <li><p><a href="https://marlowecheng.com/" title="Visit Marlowe Cheng's portfolio" target="_blank">Marlowe Cheng</a> -  Front-End Development, Copywriting</p></li>
                            <li><p><a href="https://rikkisoriano.com/" title="You're currently in my portfolio!">Rikki Soriano</a> - Full-Stack Developer, Graphic Design</p></li>
                            <li><p><a href="https://davekoo.com/" title="Visit Dave Koo's portfolio" target="_blank">Dave Koo</a> -  Full-Stack Developer, Project Documentation</p></li>
                        </ul>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Problem to Solve</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Job insecurity can impact anybody in life. It especially takes a toll on your mental health. As a result, it has detrimental effects on an employee's performance.  Based on our research, job insecurity:</p>
                        <ul class="list">
                        <li><p>Takes a toll on mental health.</p></li>
                        <li><p>Forces career changes due to recession.</p></li>
                        <li><p>Leaves people feeling lost and unsure.</p></li>
                        </ul>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Our Solution</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-mockup-1.jpg" alt="a mockup image of Forward's website">
                        <p class="caption">Forward's landing page</p>
                        <p>We were inspired by our own struggles with our job search journey. We know how valuable and beneficial someone's guidance and encouragement can be for someone just starting out in the tech industry.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-mockup-2.jpg" alt="a mockup image of Forward's website">
                        <p class="caption">Forward's user page</p>
                        <p>Forward provides a platform that empowers individuals to achieve their full potential. Connect to local mentors to help guide their personal and professional journeys. </p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-mockup-3.jpg" alt="a mockup image of Forward's website">
                        <p class="caption">Forward's projects list page</p>

                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Design</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-wireframes-1.jpg" alt="">
                        <p class="caption">Forward's Lo-Fi wireframes created by Kayla Tran</p>
                        <p>Kayla, our designer, was able to deliver rapid lo-fi and hi-fi wireframes for the overlook of the website design. While working on these wireframes, our front-end developers went to work, coding each component and screen.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-wireframes-2.jpg" alt="">
                        <p class="caption">Forward's Hi-Fi wireframes created by Kayla Tran</p>
                        <p>Through constant communication with the designer and front-end developers, we were able to address what is doable within the project scope, especially since we were very time-constrained for the whole event.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Development</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                    <p>The team consisted of 4 developers where 2 worked on front-end and the other 2 worked on back-end. I took on the role of a back-end developer working along with Dave in creating the database.</p>
                    <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-backend-code.jpg" alt="">
                    <p class="caption">A coding snippet of the website backend data</p>
                    <p>The back-end database of mentors and projects was created using PHP and SQL. An issue we ran into together was that we were having a hard time visualizing what the back-end data would look like initially. After communicating with the designer and front-end developer, we've managed to put together a data file with an array of 'Mentors' containing their own data values. These mentor data are created through a class method taking in values such as their name, career, and what they specialize in.</p>
                    <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-data-display.jpg" alt="">
                    <p class="caption">An image of how the data was displayed</p>
                    <p>As the night comes to an end our team was slowly exhausted over time and decided to call it. I decided to keep on going and took on issues that we're addressing in the front end along with Dave. We both managed to finish the front-end work, and next thing in the morning just needed some tweaks before submission.</p>

                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Challenges</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>As a team, we took a week to think about our project idea. There was a lot of discussion going around and ended up with this mentor platform idea because we empathize with users who have job insecurity as we are seeking new opportunities for ourselves. </p>

                        <p>At times, we encountered situations where some team members had less work to do. To address this, we maintained constant communication through messaging and distributed the workload by assigning tasks such as creating presentations while waiting for front-end designs. This approach helped us visualize our back-end and ensured that everyone was contributing to the project's progress.
                        </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-forward-first.jpg" alt="">
                        <!-- <p class="caption">Forward's first place announcement</p> -->
                        <p>Overall, an amazing experience for first-time hackers at a hackathon. We hope to work on this in the future and possibly make it to possibly an actual app that schools can use. We've planned some features to implement such as in-app messaging and an events page for local meetups.</p>
                    </div>
                    <div class="cta">
                        <a class="btn btn--s" href="<?php echo get_public_url('')?>work.php">View Forward's website here<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                        </div>
                </section>
            </section>
    </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>