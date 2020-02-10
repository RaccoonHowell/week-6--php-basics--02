<?php

declare(strict_types=1);

function concat (string $firstWord, string $secondWord) : string {
    
    return $firstWord . " " . $secondWord;
};

var_dump(concat("fish", "sticks")); // string(11) "fish sticks"
var_dump(concat("hello", "world")); // string(11) "hello world"

// Create a function, concat, that takes two strings as arguments. The function should return the two strings joined together with a space in between.