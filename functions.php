<?php

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $b -$a;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Error: Cannot divide by zero";
    }
    return $a / $b;
}

function square($x) {
    return $x ** 2;
}

function cube($x) {
    return $x ** 3;
}

function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Add more functions as needed...

?>

