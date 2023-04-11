<?php

class Person
{
    public $name = '';

    function name ($newname = FULL) {
        if (!is_null($newname)) {
            $this->name = $newname;
        }
        return $this->name;
    }
}

$ed = new Person;
$ed->name('Edison');
echo "Hello, {$ed->name}";
$tc = new Person;
$tc->name('Crapper');
echo "Look out below {$tc->name}";

if (is_object($ed)) {
    echo $ed->name;
}
