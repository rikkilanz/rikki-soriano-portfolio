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
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-filcoop-bc-thumb.jpg" alt="A desktop and mobile mockup of Terra Fortuna's website">
            <section class="project-intro">
                <h1 class="project-title">FILCOOP BC | Website Redesign</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">CODING</li>
                    <li class="btn btn--almond">UIUX</li>
                </ul>
                <h2 class="project-description">A website redesign to support modern web standards, better accesbility and user experience for the webs users of FIL-COOP BC.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">6 Weeks</p>
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
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-html-structure.jpg" alt="an image of HTML code structure for the weather app">
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
                        <p>To have a great understanding of what is required of the website, I’ve created a user scenario with whom is a user that I can empathize.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-postman.jpg" alt="An image of Postman software fetching for API data">
                        <p class="caption">Postman software fetching for API data</p>
                        
                        <p>In this scenario, we get into a role of a mother raising kids, who is looking to support her family by joining organizations that provide services and programs that FIL-COOP BC provides.</p>

                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-fetch.jpg" alt="A coding snippet of the fetch function usage">
                        <p class="caption">Usage of the fetch function when grabbing API data</p>
                        
                        <p>I then coded the JavaScript to load the data from the API by using the <a href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch" target="_blank">.fetch()</a> function. Within this function, I've chained a series of codes to store the data as a JSON for a readable format, as well as storing it in a variable for accessing later (whether by passing it as a parameter to a function or just displaying the data with console.log to read the data.)</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Displaying the Data</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>Displaying the data was a little bit of a struggle. I found out that the API displays its data as object arrays, so I placed the fetched data as a variable where I can access its array of data and objects.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-data-accessing.jpg" alt="A coding snippet of the fetch function usage">
                        
                        <p>Another issue I ran into was that every time I refreshed the page, it would continuously add more data forecasts without getting rid of the previous.</p>

                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-clear-code.jpg" alt="A coding snippet of the fetch function usage">
                        
                        <p>This was solved by clearing the forecast container before the data is loaded so that every time the page refreshes, we delete its current posted data. </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Moving Into React</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>An issue I ran into was that the Loader component I made was not displaying properly. It was just displaying always while my data was loading and when it is loaded. I solved this by using a React function called .useState() and .useEffect()</p>
                        
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-weather-now-loading.jpg" alt="A coding snippet of the fetch function usage">
                        <p class="caption">Loader code snippets and loading animation component</p>

                        <p>States gave me the ability to set whether and API data has been set or not. Another was having the ability to set states for the loading component when it should appear or not. </p>

                        <p>UseEffect was used and called to fetch the API data, where then it sets the state of whether the loader is loading, the data is available, and when an error is caught.</p>
                        <div class="cta">
                            <a class="btn btn--s" href="https://github.com/rikkilanz/weather-react-app" title="View code files at GitHub" target="_blank">View code files at GitHub<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                        </div>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Project Reflection</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                    <p>React is a really great JS framework. It helped me make my project cleaner and more efficient by understanding component-based pieces that build the overall app. It also gave me the ability to explore more about what other coding languages and libraries might offer me. </p>

                    <p>Some improvements that I might add in this project, later on, is more functionality by adding a GPS location tracker to know where you are located and set the weather for you, as well as a search functionality.</p>

                    <div class="cta">
                            <a class="btn btn--s" href="https://rikkilanz.github.io/weather-react-app/" title="View Weather Now React JS app" target="_blank">View live prototype here<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                        </div>
                    </div>
                </section>
            </section>
    </section>
    <?php include('../partials/project-slider.php') ?>
    </main>
    <?php include('../partials/footer.php') ?>
</body>
</html>