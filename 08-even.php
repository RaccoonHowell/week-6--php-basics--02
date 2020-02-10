<?php

declare(strict_types=1);

function even (float $num) : bool {

    return $num % 2 === 0;
}

var_dump(even(1)); // bool(false)
var_dump(even(2)); // bool(true)

// Create a function, even, that takes a number as an argument. The function should return true if the number is even and false if it is odd.