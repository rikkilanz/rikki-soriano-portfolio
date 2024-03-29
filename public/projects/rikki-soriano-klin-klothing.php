<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
<?php 
    $page_title = 'Rikki Soriano - Klin Klothing | Mobile App Prototype';
    $page_desc = 'A working Adobe XD mobile app prototype for a fictional clothing brand.';
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
            <img class="project-thumbnail" src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-thumb.jpg" alt="A mobile mock of klin klothing's UI prototype">
            <section class="project-intro">
                <h1 class="project-title">Klin Klothing | Mobile App Prototype</h1>
                <ul class="project-type flex">
                    <li class="btn btn--almond">WIREFRAMING</li>
                    <li class="btn btn--almond">UIUX</li>
                </ul>
                <h2 class="project-description">A working Adobe XD mobile app prototype for a fictional clothing brand.</h2>
                <ul class="project-info">
                    <li class="project-info-timeline">
                        <h3 class="heading-info">Timeline</h3>
                        <p class="description">6 Weeks</p>
                    </li>
                    <li class="project-info-tools">
                        <h3 class="heading-info">Tools</h3>
                        <p class="description">Adobe Illustrator</p>
                        <p class="description">Adobe XD</p>
                    </li>
                    <li class="project-info-links">
                        <h3 class="heading-info">Project Links</h3>
                        <ul class="project-links flex">
                            <li class="link-item">
                                <a href="https://xd.adobe.com/view/a3f5bfb8-80ba-4fc9-ac54-4a78fdbbe447-f6a6/?fullscreen" target="_blank"><img src="<?php echo get_public_url('images/')?>adobe-xd-icon.svg" alt=""></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="project-purpose">
                <p class="description"><b>The purpose:</b> of the project is to create a prototype app for a fictional business with a specific user archetype and target audience in mind.</p> 
                <p class="description">I created the prototype with Adobe XD and user-tested it with  <a href="https://www.useberry.com/" title="Go to Useberry's website" target="_blank">UseBerry</a>.</p>
            </section>
            <section class="project-process">
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Research</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>I've researched and followed existing app design systems from other retail companies
                        (<a href="https://www.uniqlo.com/ca/en/" title="Go to UniQlo's page" target="_blank">Uniqlo</a>, <a href="https://www2.hm.com/en_ca/index.html" title="Go to H&M's page" target="_blank">H&M</a>, <a href="https://ca.shein.com/" title="Go to Shein's page" target="_blank">Shein</a>).</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-uniqlo-handm-shein.jpg" alt="Uniqlo, H&M, and Sheins UI Mobile Layout">
                        <p class="caption">Uniqlo, H&M, and Sheins UI Mobile Layout</p>
                        <p>Most of the apps had a lot of images to highlight their products and use some sort of a gallery slider for users to browse. All of them are actually contained in a card to create some unity and content division.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Logo Design and Style Tile</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-logo-design.jpg" alt="an image of the text klin klothing in different font types ">
                        <p class="caption">Klin Klothing's logo ideation process</p>
                        <p>The idea for the logo is to stick with the business branding of being a minimal clothing brand.</p>
                        <p>I played around with a bunch of typefaces from serif to sans-serifs and ended up using Crimson Pro. The type's thick serifs and serious tone fits the brand really well of presenting minimalism with an organic and authentic feel.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-style-tile.jpg" alt="an image of button styles, font styles, and color types">
                        <p class="caption">Klin Klothing's style tile</p>
                        <p>For the style tile, I wanted to stick with keeping the UI colors to a minimal to keep consistency with the branding. The only colors I used for the UI design is a hue of red and green for actions. I also toned down the hues so it gives off a more earthy feel.</p>
                        <p>I used Open Sans as the majority of the font for the UI for easy readability on mobile phones.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">User Persona/Scenario</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>I created a user persona that fits the target audience of the business in order to design the UI. This way, we can empathize on how our users would feel navigating through the UI.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-user-persona.jpg" alt="an image of klin klothing's user persona named Zain Stanton">
                        <p class="caption">Klin Klothing's User Persona - Zain Stanton</p>
                        <p>Meet Zain Stanton! He is a young entrepreneur, loves playing with dogs, and lives a very busy lifestyle as an accountant.</p>
                        <p>One of Zains goals is to save money to afford a house in Vancouver, while he dislikes a messy workspace environment.</p>
                        <p>By empathizing with Zain, I started sketching out the wireframe designs and thought of how I could implement the branding of minimalism to Zain's busy lifestyle and his dislike for messy environments.
                        </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">User Flow</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                            <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-user-flowchart.jpg" alt="an image of klin klothings user flow chart from home to the checkout process">
                            <p class="caption">Klin Klothing's User Flowchart</p>
                            <p>Users would browse through the UI with various products. The products are either saved for later, or placed in their carts. The user is then asked to check out their item placed in their carts. After various validations, the user's flow ends with a purchase end confirmation.</p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Wireframes</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-wireframe-1.jpg" alt="an image of low-fi wireframes for klin klothings landing page, register page, login page">
                        <p class="caption">Klin Klothing's App Wireframes for Landing Page, Register Page, Login Page</p>
                        <p>For my design, I've decided to re-create that same layout/style because it seems to work and is used by the majority of retail apps (Save-On Foods or AliExpress). </p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-wireframe-2.jpg" alt="an image of low-fi wireframes for klin klothings home page, and favourites page">
                        <p class="caption">Klin Klothing's App Wireframes for Home Page, Favourites Page</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-wireframe-3.jpg" alt="an image of low-fi wireframes for klin klothings cart page, checkout page, success page">
                        <p class="caption">Klin Klothing's App Wireframes for Cart Page, Checkout Page, Success Page</p>
                        <p>Elements such as having a card style container to contain a product and its information. These cards would contain a product name, image, and a button to save items for later browsing. </p>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Prototype</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-prototype.jpg" alt="an image of high-fi wireframes for klin klothings landing page, and product page">
                        <p class="caption">Klin Klothing's Prototype example</p>
                        <p>The app prototype was made with Adobe XD. I've linked most of the buttons to lessen the misclick rate during the test. With this in mind, I can gather more data on how the user interacts with the mobile application and how they resolve their flow when the page changes.</p>
                        <div class="cta">
                            <a class="btn btn--s" href="https://xd.adobe.com/view/a3f5bfb8-80ba-4fc9-ac54-4a78fdbbe447-f6a6/?fullscreen" title="Go to Klin Klothing's mobile app protoype in Adobe XD" target="_blank">View Adobe XD prototype<img src="<?php echo get_public_url('images/')?>external-link-icon.svg" alt="external link icon white"></a>
                        </div>
                    </div>
                </section>
                <section class="article-section">
                    <div class="article-section-header">
                        <h3 class="article-section-heading">Test Findings</h3>
                        <div class="more-btn"></div>
                    </div>
                    <div class="article-section-content">
                        <p>During this project, we were required to test our prototypes by using a third-party software, UseBerry. The data produced by the test was really useful for implementing design changes on where users were stuck.</p>
                        <ul class="list">
                            <h4 class="article-section-subheading">Testing Takeaways:</h4>
                            <li>
                                <p>Users got stuck at the login page because the button was linked to a different frame.</p>
                            </li>
                            <li>
                                <p>Users expect a product page to appear when a product card is clicked.</p>
                            </li>
                            <li>
                                <p>A lot of users click on the image other than parts of the card.</p>
                            </li>
                            <li>
                                <p>Coupon button in check out was clicked a lot assuming they thought it was the next button.</p>
                            </li>
                        </ul>
                        <p>After getting some insights with UseBerry, I added and tweaked the final prototype based on the user testing.</p>
                        <img src="<?php echo get_public_url('images/')?>rikki-soriano-klin-klothing-revision.jpg" alt="an image of klin klothing's protoypes revisions">
                        <p class="caption">Klin Klothing. revisions after test</p>
                    </div>
                </section>
            </section>
        </section>
        <?php include('../partials/project-slider.php') ?>
    </main>
<?php include('../partials/footer.php') ?>
</body>
</html>