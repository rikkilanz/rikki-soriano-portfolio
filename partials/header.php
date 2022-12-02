<?php

    $header_class = $header_class ?? '';
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W87G54Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
        <div class="hdr hdr-index flex <?php echo $header_class; ?>">
            <div class="logo flex">
                <a class="flex" href="index.php" title="Go to Rikki Soriano homepage">
                    <img 
                        <?php 
                        // Check if variable $header_class contains a string, if not, display the orange variation of the logo (used in most pages)
                            if ($header_class  != ''){
                                echo 'src="images/rikki-soriano-logo-horizontal-orange.svg"';
                        // Else, display the white version (only appears in index)
                            } else {
                                echo 'src="images/rikki-soriano-logo-horizontal-white.svg"';
                            }
                        ?> 
                    alt="Rikki Soriano Logo">
                </a>
            </div>
            <div class="menu flex">
                <nav>
                    <ul class="flex nav-items">
                        <li><a href="work.php" title="Go to Rikki Soriano projects page">Work</a></li>
                        <li><a href="about.php" title="Learn more about Rikki Soriano">About</a></li>
                        <!-- <li><a href="resume.html" title="View Rikki Soriano resume page">Resume</a></li> -->
                        <li><a href="https://www.linkedin.com/in/rikkisoriano/" title="Visit Rikki Soriano LinkedIn page" target="_blank"><img class="icon" src="images/linkedin-icon.svg" alt="linkedin logo"></a></li>
                    </ul>
                    
                    <!-- Add hamburger for responsive
                        <div class="hamburger">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                        </div>
                 -->
                </nav>
            </div>
        </div>
    </header>