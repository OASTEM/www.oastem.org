<?php
require('./common.php');

$templ->setTitle('Home');
$templ->render('header');
?>

<script src="/scripts/cal-events.js"></script>

<div class="announcement-wrap">
                Don't forget to check out our booth during club rush
</div>
<div id="date-wrap">
    <span>Meeting</span> Days | <span class="sci">Science</span> Tuesday <span class="tech">Technology</span> Wednesday <span class="egr">Engineering</span> Monday &amp; Saturday <span class="math">Math</span> Thursday
</div>
<div class="row calendar-wrap">
    <div class="col-4 cal-evt-wrap">
        <div id="calendar-events">
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
                <div class="evt-summary selected">
                    <h3>Club Rush</h3>
                    <p>Come check out our booth...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8 evt-info-wrap">
        <div id="evt-info">
            <h4 id="evt-info-close" class="hide-on-desktop" onclick="toggleEvtInfo()">&lt;Back</h4>
            <h1 id="evt-title">Club Rush</h1>

            <h4 id="evt-loc">Quad</h4>
            <h4 id="evt-time">Sept 12 - 15, Lunch</h4>

            <div id="evt-desc">
                Come check out our booth during club rush and sign up for STEM! It will be a blast, we promise!
            </div>
        </div>
    </div>
</div>

<?php
$templ->render('footer');