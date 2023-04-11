<?php

$counter = 0;

for ($counter = 0; $counter < 10; $counter++) {
    echo "Counter is $counter";
}

$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $total += $i;
    echo $total;
}

$total = 0

for ($i = 0, $j = 1; $i <= 10; $i++, $j *= 2) {
    $total += $j;
    echo $total;
}
