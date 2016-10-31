<?php
require_once "../common.php";
require_once "../g-settings.php";

$cal_id = "oastem.org_rfflc3cvu83a42kgfutk3n8ikg@group.calendar.google.com";

if(isset($_POST['action'])){
    switch($_POST['action']){
    case "get":
        echo json_encode(processEvents());
        break;
    case "getNew": //TODO: Js handling & inf scroll
        if(isset($_POST['eid']) && isset($_POST['timeMin'])){
            echo json_encode(processEvents("",$_POST['timeMin'],0,$_POST['eid']));
        }else echo "Insufficient data was supplied for the request.";
        break;
    case "getOld": //TODO: Js handling & inf scroll
        if(isset($_POST['timeMax']) && isset($_POST['eid'])){
            echo json_encode(processEvents($_POST['timeMax'],"",0,$_POST['eid']));
        }else echo "Insufficient data was supplied for the request.";
        break;
    default:
        echo "Invalid action.";
    }
}else echo "No action defined.";

function processEvents($time_min = "-7 days", $time_max = "", $max_results = 0, $eidL = -1){
    
    global $cal_id, $service, $timeOverrideEnd, $timeOverrideStart;
        
    $lDate = new DateTime();
    $lDate->modify($time_min);

    $cal = $service->calendars->get($cal_id);

    $optParams = array(
      'orderBy' => 'startTime',
      'singleEvents' => true,
      'timeMin' => $lDate->format('c')
    );
    
    if ($max_results != 0) $optParams['maxResults'] = $max_results;
    if ($time_max != "") $optParams['timeMax'] = $time_max;

    $events = $service->events->listEvents($cal->id, $optParams);

    $event_arr = array(array());
    $page_html = "";
    $eid = $eidL + 1;
    
    $pull_arr = $events->getItems();
    array_reverse($pull_arr);
    
    foreach ($pull_arr as $event) {    

        $event_arr[$eid]['title'] = $event->getSummary();
        $event_arr[$eid]['desc'] = $event->getDescription();
        $event_arr[$eid]['location'] = $event->getLocation();
        $event_arr[$eid]['date'] = processEventDate($event->getStart(),$event->getEnd());
        $event_arr[$eid]['start'] = $event->getStart();
        $event_arr[$eid]['end'] = $event->getEnd();
        $event_arr[$eid]['color'] = $event->getColorId();
        $event_arr[$eid]['attachments'] = $event->getAttachments();

        switch($event_arr[$eid]['color']){
            case "10": $color_class = "sci-gr"; break;
            case "9": $color_class = "tch-bl"; break;
            case "11": $color_class = "egr-or"; break;
            case "5": $color_class = "mth-ye"; break;
            default: $color_class = "gen-pu";
        }
        
        $desc = $event_arr[$eid]['desc'];
        
        $sv = $event_arr[$eid]['start'];
        $ev = $event_arr[$eid]['end'];
        
        $event_arr[$eid]['time'] = processEventTime($sv, $ev, $desc);


        $dates = processEventDate($sv, $ev);
        $d = $dates['d'];
        $my = $dates['my'];

        $title = $event_arr[$eid]['title'];
        
        if($desc == "") $desc= "<i>No description data.</i>";
        else $desc = parseDescription($desc,$event_arr[$eid]['attachments']);
        $event_arr[$eid]['desc'] = $desc; 
        
        $shortDesc = str_replace("<br></br>","",str_limit($desc));

        $page_html .= "<div class='event-container' data-eid=$eid>";
            $page_html .= "<div class='date-box $color_class'>";
                $page_html .= "<h3>$d</h3>";
                $page_html .= "<p>$my</p>";
            $page_html .= "</div>";
            $page_html .= "<div class='evt-summary'>";
                $page_html .= "<h3>$title</h3>";
                $page_html .= "<p>$shortDesc</p>";
            $page_html .= "</div>";
        $page_html .= "</div>";

        $eid++;
    }
    
    return array(
        'html' => $page_html,
        'eventData' => $event_arr,
        'lastEid' => $eid,
        'timeMin' => "", //applies to getting new 
        'timeMax' => $time_min //applies to getting old
    );
}

?>