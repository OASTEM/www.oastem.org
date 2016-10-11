<?php
require_once "./common.php";
require_once "./g-settings.php";

$cal_id = "oastem.org_rfflc3cvu83a42kgfutk3n8ikg@group.calendar.google.com";

$max_results = 15;
$firstDate = new DateTime();
$firstDate->modify("-7 day");

$cal = $service->calendars->get($cal_id);

$optParams = array(
  'maxResults' => $max_results,
  'orderBy' => 'startTime',
  'singleEvents' => true,
  'timeMin' => $firstDate->format('c')
);

$events = $service->events->listEvents($cal->id, $optParams);

foreach ($events->getItems() as $event) {
    $start = $event->getStart();
    $end = $event->getEnd();
    
    echo "Event";
    echo "<br>";
    echo $event->getLocation();
    echo "<br>";
    echo $event->getSummary();
    echo "<br>";
    echo $event->getDescription();
    echo "<br>";
    var_dump($event->getColorId());
    echo "<br>";
    var_dump($start);
    echo "<br>";
    var_dump($end);
    echo "<br>";
    var_dump($event->getAttachments());
}


?>