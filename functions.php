<?php

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $b -$a;
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
    if ($n <= 0) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function  is_even($n){
	if($n//2==0){
		return  true;
	}
	return false;
}

// Add more functions as needed...

?>

