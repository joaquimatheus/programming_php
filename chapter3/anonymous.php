<?php

$array = array('really long string here, boy', 'this', 'middling length', 'larger');
$sortOption = 'random';

usort($array, function($a, $b) use ($sortOption) {
    if ($sortOption == 'random') {
        return rand(0, 2) - 1;
    }
    else {
        return strlen($a) - strlen($b);
    }
});

print_r($array);
