<?php

for ($i = 1000; $i > 0; $i--) {
    if (isPrime($i)) {
        $numberString = (string)$i;
        if ($numberString === strrev($numberString)) {
            echo $i;
            exit;
        }
    }
}

/**
 * Check if number is prime
 *
 * @param int $number
 * @return bool
 */
function isPrime($number)
{
    if ($number === 1) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
