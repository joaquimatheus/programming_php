<?php

$bigLongVariableName = 'PHP';
$short =& $bigLongVariableName;
$bigLongVariableName .= " rocks!";

print "\$short is $short <br/>";
print "Long is $bigLongVariableName";

$short = "Programming $short";
print "\$short is $short <br/>";
print "Long is $bigLongVariableName";
