<?php
$white = "snow";
$black =& $white;
unset($white);
print $black;
