<?php

$names = array('Fred', 'Barney', 'Wilna', 'Betty');

function &findOne($n) {
    global $names;

    return $names[$n];
}

$person =& findOne(1);
$person = 'Barnetta';

echo $names[1];
