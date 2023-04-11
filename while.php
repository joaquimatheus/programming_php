<?php
$total  = 0;
$i = 1;

while ($i <= 10) {
    $total += $i;
    print_r($total);
    $i++;
}

$total = 0;
$i = 1;

while ($i <= 10):
    $total += $i;
    print_r($total);
    $i++;
endwhile;
