<?php

function fibonacci($input) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $input; $i++) {
        $n = $first;
        $first = $second;
        $second = $n + $second;
        // Show numbers
        echo $first . "<br>" . PHP_EOL; 
    } 
}

echo fibonacci(100);