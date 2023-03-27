<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $page_title = 'Rikki Soriano - FILCOOP BC | Website Redesign';
    $page_desc = 'A website redesign to support modern web standards, better accessibility and user experience for the website users of FIL-COOP BC.';
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
            <div id="topBtn" title="Go to top" class="btn btn__circle btn--top btn--orange"><img src="<?php echo get_public_url('images/')?>arrow-up.svg" alt="a vector image of an arrow"></div>
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-bc-thumb.jpg" alt="Images of FILCOOP's redesign screen displayed next to each other">
            <section class="project-intro">
                <h1 class="project-title">FILCOOP BC | Website Redesign</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">UIUX</li>
                    <li class="btn btn--almond">Figma</li>
                </ul>
                <h2 class="project-description">A website redesign to support modern web standards, better accesbility and user experience for the website users of FIL-COOP BC.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">2 Weeks</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Figma</p>
                        <p class="description">Adobe Illustrator</p>
                    </li>
                    <li class="project-info-links">
                        <h3 class="heading-info">Project Links</h3>
                        <ul class="project-links flex">
                            <li class="link-item">
                                <a href="https://www.figma.com/file/bymkkI1TXJmemo4CbIHEs2/FIL-COOP-BC-Project?node-id=0%3A1&t=s2XApK8PSe8W7D7p-1/" target="_blank"><img src="<?php echo get_public_url('images/')?>figma-icon.svg" alt="Check out the website prototype"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The purpose:</b> Give the website a re-design to modern standards and support the goals of the organization and the user.</p>
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Defining the Problem</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Not only the aesthetics of FIL-COOP BC's website needs some touchup, but the information architecture of the website is unorganized and the main call to action of the website is drowned within pages.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-old-design.jpg" alt="an image of FILCOOP's old website">
                        <p class="caption">FILCOOP BC's current design of their News Bulletin page</p>
                        <p>Not only this is a frustrating experience for the user, but it strays away farther from reaching the goal of the organization.</p>
                        <p>One of the goals of the website is to get prospects to join them as members of the organization but as a user:</p>
                            <ul class="list">
                                <li><p>Why should I be a member?</p></li>
                                <li><p>Why should I donate?</p></li>         
                                <li><p>Who do I reach for questions?</p></li>         
                                <li><p>How do I sign up to be a member?</p></li>         
                                <li><p>Where can I donate?</p></li>         
                            </ul>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">User Scenario</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>To have a great understanding of what is required of the website, I've created a user scenario with whom is a user that I can empathize.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-user-scenario.jpg" alt="a user scenarion for a persona names Christina Molina, with user scenarion description">
                        <p class="caption">A user scenario to define the problems encountered of a user.</p>
                        
                        <p>In this scenario, we get into a role of a mother raising kids, who is looking to support her family by joining organizations that provide services and programs that FIL-COOP BC provides.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Solution</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>The redesign would support the user flow of being able to get the information they need and how they can donate to support the cause.</p>
                        <p>The possible solution:</p>
                        <ul class="list">
                            <li><p>Have a clear call-to-action button</p></li>
                            <li><p>Creating a user flow that directs them to donate</p></li>         
                            <li><p>Restructure the information architecture for readability</p></li>       
                        </ul>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Wireframes</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <h4 class="article-section-subheading">Header/Footer</h4>
                        <p>I started off by re-designing the header by reorganizing the information architecture of the website, stating the primary navigation and sub-navigations.</p>
                        
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-information-architecture.jpg" alt="an image of FILCOOP's redesigned information architecture">
                        <p class="caption">Restructured information architecture of the old website design.</p>
                        
                        <p>The header is a crucial navigator for our user's journey, and by restructuring the information architecture of the website, we can make it easier for users to flow through their experience.</p>
                        
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-bc-header.jpg" alt="an image of the redesigned header of FILCOOP">
                        <p class="caption">The redesigned header with a contrast call-to-action button.</p>

                        <p>A visible call to action also eases the process of being able to support the organization's goal so a user can decide when they want to donate while in the process of browsing.</p>
                    </div>
                    <div class="article-section-content">
                        <h4 class="article-section-subheading">Page Sections/Typography Hierarchy</h4>
                        <p>When creating the wireframes, I wanted a proper hierarchy of text since the website contains a lot of information in a text format. To achieve this, I've created proper and consistent sections to divide information and prevent cognitive overload.</p>
                        
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-home-sectioning.jpg" alt="an image of FILCOOP's homepage divided sections">
                        <p class="caption">An illustration of divided sections on the redesigned websites homepage.</p>
                        
                        <p>I've also added some image media that supports the text so the site feels livelier and supports the branding of the organization.</p>

                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-content-dividing.jpg" alt="an image of FILCOOP's homepage divided contents">
                        <p class="caption">About page section content dividing</p>
                        
                        <p>With consistent-sized headings and mixed media, we can engage and direct the user's attention easily so they have a better experience of reading and looking for the information they need.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">User Donation Flow</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                    <p>To support the organization's goal of collecting donations, I've set up the header to have ease of access for the donate call to action.</p>
                    
                    <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-bc-ia.jpg" alt="an image of the redesigned information architecture">
                    <p class="caption">User donation flowchart</p>

                    <p>This then leads users to fill up a form with their information regarding donations.</p>

                    <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-donation-form.jpg" alt="first page of FILCOOP'S donation form">
                    <p class="caption">First page of the user donation form. Process is broken down step-by-step.</p>

                    <p>Since we're managing user information and payment, I've broken down the process into a step-by-step process to not overwhelm users as well as reduce input mistakes.</p>

                    <img src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-donate-flow.jpg" alt="an illustration of how a user would donate">
                    <p class="caption">Donation step-by-step process</p>

                    <div class="cta">
                        <a class="btn btn--s" href="https://www.figma.com/proto/bymkkI1TXJmemo4CbIHEs2/FIL-COOP-BC-Project?node-id=2%3A264&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A264" title="View Weather Now React JS app" target="_blank">View live prototype here<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                    </div>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                    <p>Overall, this project is a great learning process for me in the importance of creating a design that supports both user and organizational goals. </p>

                    <p>Some key takeaway I would improve further is to keep in mind accessibility standards like the contrast of text. Having access to 3 branding colours give you the freedom to use them creatively, but at the same time must be used with intent.</p>
                </section>
            </section>
    </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>