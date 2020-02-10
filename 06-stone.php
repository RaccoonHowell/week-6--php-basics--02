<?php

declare(strict_types=1);

function stone (float $kg) : float {

    return $kg * 0.157473;
}

var_dump(
    stone(74), // float(11.65278)
    stone(50), // float(7.8735)
);

// Create a function, stone, that takes a weight in kg and converts it to stone