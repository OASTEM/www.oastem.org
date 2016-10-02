<?php
require('./common.php');
$title = "Home";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$templ->setTitle($title);
$templ->setOpenGraph($title, $url, "Oxford Academy STEM's main page. See upcoming events and learn how you become a part of our team!");
$templ->render('header');
?>

<script src="/scripts/cal-events.js"></script>

<div class="announcement-wrap">
                Please check the calendar for an amazing field trip as well as a Navy apprentenship opportunity.
</div>
<div id="date-wrap">
    <span>Meeting</span> Days | <span class="sci">Science</span> Tuesday <span class="tech">Technology</span> Wednesday <span class="egr">Engineering</span> Monday &amp; Saturday <span class="math">Math</span> Thursday
</div>
<div class="row calendar-wrap">
    <div class="col-4 cal-evt-wrap">
        <div id="calendar-events">
            
            <div class="event-container" data-eid="17">
                <div class="date-box gen-pu">
                    <h3>17</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary selected">
                    <h3>Non Destructive Testing Workshop</h3>
                    <p>Only the first 40 students...</p>
                </div>
            </div>
           
            <div class="event-container" data-eid="16">
                <div class="date-box gen-pu">
                    <h3>04</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Navy Apprenticeship Program</h3>
                    <p>seap.asee.org/apply</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="15">
                <div class="date-box mth-ye">
                    <h3>04</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Math Counts Meeting</h3>
                    <p>We will be working on more...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="14">
                <div class="date-box egr-or">
                    <h3>04</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Civil Engineering Meeting</h3>
                    <p>Hello everyone...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="13">
                <div class="date-box egr-or">
                    <h3>03</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary selected">
                    <h3>Engineering Meeting</h3>
                    <p>We will be working on...</p>
                </div>
            </div>
            
            
            <div class="event-container" data-eid="12">
                <div class="date-box egr-or">
                    <h3>01</h3>
                    <p>OCT 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Engineering Meeting</h3>
                    <p>For those of you who do not...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="11">
                <div class="date-box mth-ye">
                    <h3>29</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Mathematics Meeting</h3>
                    <p>The math team, including...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="10">
                <div class="date-box tch-bl">
                    <h3>28</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Technology Meeting</h3>
                    <p>We'll be giving a sneak peek...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="9">
                <div class="date-box sci-gr">
                    <h3>27</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Science Meeting</h3>
                    <p>Some of our members for the upcoming...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="8">
                <div class="date-box mth-ye">
                    <h3>27</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Math Counts Meeting</h3>
                    <p>We will be reviewing our...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="7">
                <div class="date-box egr-or">
                    <h3>27</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Civil Engineering Meeting</h3>
                    <p>We will be introducing...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="6">
                <div class="date-box egr-or">
                    <h3>26</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Engineering Meeting</h3>
                    <p>We will be having an introductory...</p>
                </div>
            </div>
            
            <div class="event-container" data-eid="0">
                <div class="date-box egr-or">
                    <h3>24</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Fall Classic Competition</h3>
                    <p>We will compete in an off season...</p>
                </div>
            </div>

            <div class="event-container" data-eid="1">
                <div class="date-box egr-or">
                    <h3>21</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Engineering Meeting</h3>
                    <p>We will be working on packing...</p>
                </div>
            </div>

            <div class="event-container" data-eid="2">
                <div class="date-box egr-or">
                    <h3>17</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Engineering Meeting</h3>
                    <p>We will be working on our robot...</p>
                </div>
            </div>

            <div class="event-container"  data-eid="3">
                <div class="date-box egr-or">
                    <h3>16</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Engineering Meeting</h3>
                    <p>We will be working on our robot...</p>
                </div>
            </div>

            <div class="event-container" data-eid="4">
                <div class="date-box egr-or">
                    <h3>14</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Science Meeting</h3>
                    <p>Lorum ipsum your mom</p>
                </div>
            </div>

            <div class="event-container" data-eid="5">
                <div class="date-box gen-pu">
                    <h3>1215</h3>
                    <p>SEP 2016</p>
                </div>
                <div class="evt-summary">
                    <h3>Club Rush</h3>
                    <p>Come check out our booth...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8 evt-info-wrap">
        <div id="evt-info">
            <h4 id="evt-info-close" class="hide-on-desktop" onclick="toggleEvtInfo()">&lt;Back</h4>
            <h1 id="evt-title">Non Destructive Testing Workshop</h1>

            <h4 id="evt-loc">Long Beach Convention Center</h4>
            <h4 id="evt-time">9am-2pm</h4>

            <div id="evt-desc">
                Only the first 40 students who turn their two permission slips (attached below) and their $15 bus fee to Mr. Alcala will get to go. If you have any questions contact Ms. Morrissey in Room 206.<br><br>NDT (nondestructive testing) involves examining and inspecting a wide variety of materials, components or assemblies for discontinuities and quality without destroying their integrity. NDT is utilized in a variety of industries. NDT has a bright future both in this country and throughout the world, offering young adults many career options. ASNT is coming to Long Beach, CA in October and has invited 40 Oxford Academy high school students to attend a free daylong workshop titled Nondestructive Testing: Positive Contributions to Safety and Economics. The workshop will include an introduction to NDT with examples of technical application through interactive demonstrations and hands-on activities. This sponsored workshop is free because it is a part of ASNT’s mission to promote the profession and technologies of nondestructive testing.  This is full day seminar of NDT education for high school students interested in STEM careers. Local members from the organization will be on hand to talk to the students and conduct hands-on experiments.<br><br><a href='https://drive.google.com/open?id=0B5nR46Lwjli3cVRxZ19JMm5xSTRaME45eTNEUEhyWnpBd2d3' target="_blank">ASNT Field Trip Permission Slip</a><br><a href='https://drive.google.com/open?id=0B5nR46Lwjli3bEtRVUJhUzRxc1IyTF9SNVp2THlqR3gxRWFN' target='_blank'>ASNT Photo Release - NDT Workshop</a>
            </div>
        </div>
    </div>
</div>

<?php
$templ->render('footer');