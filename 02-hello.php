<?php

declare(strict_types=1);

function hello(string $name) : string {
    
    return "hello " . $name;
};

var_dump(hello("alice")); // string(11) "hello alice"
var_dump(hello("bob")); // string(9) "hello bob"

// Update hello so that it returns the string "hello name". Also add parameter and return types.