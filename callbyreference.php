<?php
function greet(&$name) 
{
    $name = "John"; // Changing the value inside the function
    echo "Inside function: Hello, $name!<br>";
}

$person = "Nilesh";
greet($person);
echo "Outside function: Hello, $person!<br>";
?>

