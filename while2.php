<?php

$i = 0;
$j = 1;

while ($i <= 10) {
    while ($j < 10) {
        if ($j == 5) {
            break 2;
        }
        $j++;
    }

$i++;
}

echo "{$i}, {$j}";
