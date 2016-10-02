<?php
require('../common.php');


$title = "About";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$templ->setTitle($title);
$templ->setOpenGraph($title, $url, "Learn more about Oxford Academy STEM.");
$templ->render('header');
?>

<div class="row" id="about-wrap">
    <div class="col-6" id="slideshow-container">
        <img src="https://placeholdit.imgix.net/~text?txtsize=18&bg=bd1521&txtclr=ffffff&txt=Slideshow+coming+soon&w=675&h=450&txttrack=0">
    </div>
    <div class="col-6" id="about-container">
        <h1>ABOUT US</h1>
        <p>STEM is the sole Science, Technology, Engineering, and Mathematics focused organization on Oxford Academy's campus. Of distinction is OA STEM's hybrid club-team organization: club in that OA STEM consists of a group of like-minded and similarly-interested students meeting for activities, team in that OA STEM takes part in some of the most competitive contests in the nation.</p>
        <p>By expanding on OA STEM's position as the premier, largest, and only STEM-focused team in a school for the most talented students in the state, the team's membership and sponsorship are almost sure to grow.</p>
        <p>OA STEM strives to offer students the chance to learn more about and get hands-on 
experience in the STEM fields, be it by engineering robots, studying targeted sciences, or drilling lateral-thinking mathematics problems - all with the ultimate goal of representing OA well at STEM-based competitions, as well as the marketing to make all of that possible.</p>
    </div>
</div>

<div class="ab-dept-img" id="ab-sci-img"></div>

<div class="row about-dept-wrap sci-gr">
    <div class="col-4 dept-right">
        <img class="ab-icon" src="/images/Atom.svg">
    </div>
    <div class="col-8 dept-left">
        <h2 class="white">SCIENCE</h2>
        <h4>we do more than just <span class="white">experiments</span></h4>
        <p>The Science Department provides students opportunities to expand their knowledge of the sciences and investigate the natural world, through a variety of projects, activities, and competitions. The various events that are held throughout the year, such as the middle school division Science Bowl, the high school division Science Bowl, and the annual regional Science Olympiad, further student learning and produce a competitive environment that fosters learning. By placing the necessary resources in the hands of members, Science gives students an avenue through which they are able to understand the importance of science in the context of other academic fields, as well as the major role science has in our daily lives.</p>
    </div>
</div>

<div class="ab-dept-img" id="ab-tch-img"></div>

<div class="row about-dept-wrap tch-bl">
    <div class="col-5 dept-left">
        <img class="ab-icon" src="/images/Pointer.svg">
    </div>
    <div class="col-7 dept-right">
        <h2 class="white">TECHNOLOGY</h2>
        <h4>we're more than just <span class="white">coders</span></h4>
        <p>The technology department will cover the topics of Java, robotics, Android app development, networking, and HTML over the year. For those who have programming experience, we will be preparing you for upcoming Java competitions such as Progfest and CodeQuest. Our department is no stranger to winning and will be training you for success. We will be mainly focusing on teaching the basics of Java programming to beginning students and preparing advanced students for the local programming competitions. In the years past, our department has placed 1st and 4th in the local Troy Competition as well as 2nd, 3rd, and 4th place in CSULA's Progfest. New for this year, advanced students will have the opportunity to learn how to develop mobile apps for Android devices. In addition to Java programming, our department will be teaching students how to build their own websites with the HTML language.</p>
    </div>
</div>

<div class="ab-dept-img" id="ab-egr-img"></div>

<div class="row about-dept-wrap egr-or">
    <div class="col-4 dept-right">
        <img class="ab-icon" src="/images/Gear.svg">
    </div>
    <div class="col-8 dept-left">
        <h2 class="white">ENGINEERING</h2>
        <h4>we're more than just robot<span class="white">builders</span></h4>
        <p>The Engineering Department gives students the best opportunity to finally put all of their logic and knowledge to work, creating amazing robots to compete against other schools all throughout Southern California and the rest of the US. We have two main competitions: VEX and FRC, both of which require students to quickly design, build, and learn to drive a robot to efficiently finish the required tasks. With the help of mentors and a lack of restrictions, students can really spread their wings in terms of creative problem solving, getting firsthand experience on what real engineers do in the field every day. STEM Engineering is as real as it gets, using power tools, CAD, and of course the power of teamwork to build robots from scratch. It takes a real team of members to build a competent robot, and in our department we want as many people involved as possible. Our mentors and other senior members will teach the basics of managing parts and tools starting in the summer, instilling those key habits for the build seasons. And, the rewards are immense, with huge trophies and widespread attention, along with a chance to travel to huge arenas for final competitions.</p>
    </div>
</div>

<div class="ab-dept-img" id="ab-mth-img"></div>

<div class="row about-dept-wrap mth-ye">
    <div class="col-4 dept-left">
        <img class="ab-icon" src="/images/Pi.svg">
    </div>
    <div class="col-8 dept-right">
        <h2 class="white">MATHEMATICS</h2>
        <h4>we do more than just <span class="white">solve problems</span></h4>
        <p>Come out to STEM Mathematics! This year, we will have two main focuses: school math and competition math. We invite anyone interested in reviewing content taught in school math classes or preparing for on-site and online math competitions to join our department. For those of you who would like to gain a deeper understanding of your math class, the tutoring leads will be providing introductory material and an opportunity to prepare for these classes. Alternatively, if you would like to reinforce your knowledge on a math class that you already took in the past year, you can do that as well – tutoring leads will be able to help review the material and focus on specific weak areas.</p>
    </div>
</div>


<?php
$templ->render('footer');