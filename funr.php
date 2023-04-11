<?php

function &retRef() {
    $var = 'PHP';

    return $var;
}

$v =& retRef();

echo $v;
