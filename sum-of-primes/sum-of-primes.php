<?php

echo sumOfPrimes(1000);

/**
 * Calculate the sum of primes, number of primes passed as parameter
 *
 * @param int $numberOfPrimes number of primes to calculate with
 * @return int
 */
function sumOfPrimes($numberOfPrimes)
{
    $sum = 0;
    $current = 0;

    while ($numberOfPrimes > 0) {
        $current = getNextPrime($current);
        $sum += $current;

        $numberOfPrimes--;
    }

    return $sum;
}


/**
 * Get next prime larger than $start
 *
 * @param int $start
 * @return int
 */
function getNextPrime($start)
{
    $next = $start + 1;
    while (true) {
        if (isPrime($next)) {
            return $next;
        }

        $next++;
    }

    return null;
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
