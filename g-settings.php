<?php
require_once $google_dir. "autoload.php";

$email = "calendar@stem-website.iam.gserviceaccount.com";
$cal_key_path = $google_dir . "keys/cal.json";
$scopes ="https://www.googleapis.com/auth/calendar";

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $cal_key_path);

$client = new Google_Client();
$client->setApplicationName("OASTEM Website Calendar");
$client->setScopes("https://www.googleapis.com/auth/calendar.readonly");
$client->useApplicationDefaultCredentials();

$service = new Google_Service_Calendar($client);

$timeOverrideStart = "{TOVR}";
$timeOverrideEnd = "{/TOVR}";

function processEventDate($start, $end){
    $result = array();
    
    $startT = $start->getDateTime();
    $endT = $end->getDateTime();
    if(is_null($startT)){
        $startT = new DateTime($start->getDate());
        $endT = new DateTime($end->getDate());
        $endT->modify("-1 day");
        if($startT != $endT){
            $sd = $startT->format('d');
            $ed = $endT->format('d');
            $result['d'] = "$sd$ed";
        }else $result['d'] = $startT->format('d');
        
        $result['my'] = $startT->format('M Y');
    }else{
        $sv = new DateTime($startT);
        $result['d'] = $sv->format('d');
        $result['my'] = $sv->format('M Y');
    }
    
    
    return $result;
}

function processEventTime($start, $end, $desc){
    global $timeOverrideStart, $timeOverrideEnd;
    $time = "";
    
    $startT = $start->getDateTime();
    $endT = $end->getDateTime();
    if(is_null($startT)){
        $startT = new DateTime($start->getDate());
        $endT = new DateTime($end->getDate());
        $endT->modify("-1 day");
        
        if(strpos($desc, $timeOverrideStart) !== false && strpos($desc, $timeOverrideEnd) !== false){
            $startsAt = strpos($desc, $timeOverrideStart) + strlen($timeOverrideStart);
            $endsAt = strpos($desc, $timeOverrideEnd, $startsAt);
            $time = substr($desc, $startsAt, $endsAt - $startsAt);
        }elseif($startT != $endT){
            $st = $startT->format("D, F j, Y");
            $ed = $endT->format("D, F j, Y");
            $time = "$st - $ed";
        }else{
            $time = $startT->format("D, F j, Y");
        }
    }else{
        $timeStart = new DateTime($startT);
        $timeStart = $timeStart->format("g:ia");
        
        $timeEnd = new DateTime($endT);
        $timeEnd = $timeEnd->format("g:ia");
        
        $time = $timeStart . " - " . $timeEnd;
    }
    return $time;
}

function processAttachments($a){
    $string = "";
    foreach($a as $attachment){
        $link = $attachment['fuleUrl'];
        $icon = $attachment['iconLink'];
        $title = $attachment['title'];
        
        $string .= "<br><a href='$link' target='_blank'><img src='$icon'>$title</a>";
    }
    
    return $string;
}

function parseDescription($raw,$attachments){
    global $timeOverrideStart, $timeOverrideEnd;
    
    $desc = delete_all_between($timeOverrideStart, $timeOverrideEnd, $raw);
    $desc .= "<br>" . processAttachments($attachments);
    
    return nl2br($desc);
}

?>