<?php

    $header_class = $header_class ?? '';

?>

<header>
        <div class="hdr hdr-index flex <?php echo $header_class; ?>">
            <div class="logo flex">
                <a class="flex" href="index.php">
                    <img 
                        <?php 
                            if ($header_class != ''){
                                echo 'src="images/rikki-soriano-logo-horizontal-orange.svg"';
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
                        <li><a href="work.php">Work</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="https://www.linkedin.com/in/rikkisoriano/" target="_blank"><img class="icon" src="images/linkedin-icon.svg" alt="linkedin logo"></a></li>
                    </ul>
                    <div class="hamburger">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                </nav>
            </div>
        </div>
    </header>