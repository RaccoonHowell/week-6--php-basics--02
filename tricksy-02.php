<?php

declare(strict_types=1);

function both (array $array1, array $array2) : array {

    $new = [];

    foreach($array1 as $arr1) {

        foreach($array2 as $arr2) {

            if($arr1 === $arr2) {

                $new[] = $arr1;
            }
        }
    }

    return $new;
}

var_dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);

// Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.

// Hint: stick to things you've been taught and try not to Google/Stack Oveflow it