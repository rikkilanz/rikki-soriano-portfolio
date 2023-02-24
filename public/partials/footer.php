<footer class="ftr">
        <div class="ftr-info">
            <div class="ftr-image">
                <img src="<?php echo get_public_url('images/')?>/rikki-shape-three-line.svg" alt="rikki soriano branding three lines">
            </div>
            <div class="info-text">
                <h2 class="ftr-title">Keep in touch with me!</h2>
                <p class="ftr-tablet-description">Feel free<span class="display-laptop"> to send me an email at <a class="email" href="mailto:rikkilanz@gmail.com">rikkilanz@gmail.com</a></span> to chat about my work/website/what kind of music I listen to<span class="display-laptop"> or connect with me at:</span></p>
                
            </div>
            <div class="ftr-socials">
                <ul class="ftr-socials-icons flex">
                    <li><a href="https://www.linkedin.com/in/rikkisoriano/" title="Visit Rikki Soriano LinkedIn page" target="_blank"><img src="<?php echo get_public_url('images/')?>linkedin-icon.svg" alt="linkedin logo"></a></li>
                    <li><a href="https://www.instagram.com/rikkilanz/" title="Visit Rikki Soriano Instagram page" target="_blank"><img src="<?php echo get_public_url('images/')?>instagram-icon.svg" alt="instagram logo"></a></li>
                    <li><a href="https://github.com/rikkilanz" title="Visit Rikki Soriano GitHub page" target="_blank"><img src="<?php echo get_public_url('images/')?>github-icon.svg" alt="github logo"></a></li>
                    <li><a href="https://dribbble.com/rikkilanz" title="Visit Rikki Soriano Dribble page" target="_blank"><img src="<?php echo get_public_url('images/')?>dribble-icon.svg" alt="dribble logo"></a></li>
                    <li><a href="mailto: rikkilanz@gmail.com" title="Email Rikki at rikkilanz@gmail.com" target="_blank"><img src="<?php echo get_public_url('images/')?>email-icon.svg" alt="email logo"></a></li>
                </ul>
            </div>
            <div class="ftr-logo display-laptop">
                <a href="<?php echo get_public_url('index.php');?>"><img src="<?php echo get_public_url('images/')?>rikki-soriano-logo-horizontal-white.svg" alt="rikki soriano logo"></a>
            </div>
            <p class="ftr-copyright">Hand-coded with 🔥 | &copy; Rikki Soriano <script>document.write(new Date().getFullYear())</script></p>
        </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="module">
    import jump from '../scripts/jump.module.js';
    let topBtn = document.getElementById("topBtn");
    topBtn.addEventListener('click', () => {
        jump('html');
        console.log('hello');
    })
</script>
<script src="<?php echo get_public_url('scripts/lightbox.js');?>"></script>
<script src="<?php echo get_public_url('scripts/main.js');?>">
</script>