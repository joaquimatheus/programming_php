<?php 

$person = array("Edison", "Wankel", "Crapper");
$creator = array(
    "Light Bulb" => "Edison",
    "Rotary Engine" => "Wankel",
    "Toilet" => "Crapper");

foreach ($person as $name) {
    echo "Hello, {$name}";
}

foreach ($creator as $invention => $inventor) {
    echo "{$inventor} invented the {$invention} <br/>";
}

