<?php
require('../common.php');
$title = "Contact Us";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$templ->setTitle($title);
$templ->setOpenGraph($title, $url, "Send us any questions, comments or concerns using our web contact form. You can also find additional contact methods here.");
$templ->render('header');
?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="/styles/old.css" rel="stylesheet">
    <div id="content">
        <div class="two column post">
            <h1><span>Contact Us</span></h1>
            <p>Thanks for your interest in Oxford Academy STEM! If you have any additional questions about our STEM program specifically, you can reach us using the contact form below, or at <a href="mailto:contact@oastem.org">contact@oastem.org</a>.</p>
            <p>If you would like to reach us through mail, you can write to us, Oxford Academy STEM, at <a href="http://maps.google.com/maps?q=5172+Orange+Ave,+Room+902,+Cypress,+CA+90630&gl=us&t=m&z=16">5172 Orange Ave, Room 902, Cypress, CA 90630</a>.</p>
        </div>
        <div class="two column post">
                <div id="contact-form">
                    <h2>Contact</h2>
                    <form action="../scripts/contact.php" method="POST">
                        <input type="text" name="from" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        <textarea rows="5" name="message" placeholder="Message" required></textarea>
                        <div class="g-recaptcha" data-sitekey="6LeJLAgUAAAAAOfIZpAYMlb59eFEDbT_SOXWRBBf"></div>
                        <input type="submit" value="Submit"> </form>
                </div>
        </div>
    </div>
    <?php
$templ->render('footer');
?>