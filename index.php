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
            <img src="/images/ajax-loader.gif" id="loading">
        </div>
    </div>
    <div class="col-8 evt-info-wrap">
        <div id="evt-info">
            <h4 id="evt-info-close" class="hide-on-desktop" onclick="toggleEvtInfo()">&lt;Back</h4>
            <h1 id="evt-title"><i>No Event Selected</i></h1>

            <h4 id="evt-loc">-</h4>
            <h4 id="evt-time">-</h4>

            <div id="evt-desc">
                <i>No Event Selected</i>
            </div>
        </div>
    </div>
</div>

<?php
$templ->render('footer');