<?php

declare(strict_types=1);

function average (array $numbers) : float {

    $total = 0;

    foreach ($numbers as $value) {

        $total += $value;
    }

    return $total / count($numbers);
}

var_dump(
    average([2, 3, 4, 5, 6]), // float(4)
    average([2, 3]), // float(2.5)
    average([10, 30]), // float(20)
    average([-4, -8, -9]), // float(-7)
);

// Create a function, average, that takes an array of numbers as an argument. Return the average value of all the numbers.