<?php

$a = 3;

function foo() {
    global $a;

    $a += 2;
}

foo();
echo $a;
