<?php
class Entertainment {
    function handleEntertainment(Entertainment $a, callable $callback = NULL) {
        echo "Handling " . get_class($a) . " fun\n";

        if ($callback !== NULL) {
            $callback();
        }

        $callback = function() {
            echo 'Holla!';
        };
    }
}

handleEntertainment(new Clown);
