<?php

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Function to convert a string to uppercase
function toUpperCase($str) {
    return strtoupper($str);
}

// Function to convert a string to lowercase
function toLowerCase($str) {
    return strtolower($str);
}

// Function to get the length of a string
function getStringLength($str) {
    return strlen($str);
}

// Function to replace a substring in a string
function replaceSubstring($str, $search, $replace) {
    return str_replace($search, $replace, $str);
}

// Example usage
$string = "Hello, World!";
echo "Original String: $string<br>";
echo "Reversed String: " . reverseString($string) . "<br>";
echo "Uppercase String: " . toUpperCase($string) . "<br>";
echo "Lowercase String: " . toLowerCase($string) . "<br>";
echo "String Length: " . getStringLength($string) . "<br>";
echo "Replacing 'World' with 'Universe': " . replaceSubstring($string, "World", "Universe") . "<br>";

?>
