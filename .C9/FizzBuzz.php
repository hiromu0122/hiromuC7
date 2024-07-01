<?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo "Fizz";
        } else {
            echo $i;
        }
        echo PHP_EOL;
    }
?>