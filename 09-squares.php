<?php

declare(strict_types=1);

function squares (array $numbers) : array {

    $newArray = [];

    foreach ($numbers as $value) {

        $newArray[] = $value * $value;
    }

    return $newArray;   
}

var_dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);

// Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.