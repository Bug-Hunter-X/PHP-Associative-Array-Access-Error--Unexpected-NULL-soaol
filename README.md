# PHP Associative Array Access Bug

This repository demonstrates a common error in PHP when working with associative arrays.  Incorrectly accessing elements using numerical indices instead of their string keys can lead to unexpected `NULL` values. The `bug.php` file contains the erroneous code, while `bugSolution.php` provides the corrected version.

## Description

Associative arrays in PHP use string keys to map to values. Trying to access elements using numerical indices (like you would in a numerically indexed array) will not work as expected if the array is associative. This code illustrates this pitfall and shows how to properly access elements using the correct string keys.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. Observe the unexpected `NULL` value.
3. Run `bugSolution.php` to see the correct method of accessing elements.
