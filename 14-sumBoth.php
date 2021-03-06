<?php

declare(strict_types=1);

function sum (array $numbers) : int {

    $total = 0;

    foreach ($numbers as $number) {

        $total += $number;
    }

    return $total;
}

function sumBoth (array $numbers1, array $numbers2) : int {

    return sum($numbers1) + sum($numbers2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
);

// Create a function, sumBoth, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

// Hint: to avoid repeating code, you might want to write a sum function that adds up the values in a single array and call that inside sumBoth