# PHP Unset() Gotcha: Pass-by-Reference Behavior

This repository demonstrates an uncommon error in PHP related to the `unset()` function and pass-by-reference.  When an array is passed by reference to a function, using `unset()` to remove elements modifies the original array, potentially leading to unexpected side effects.

The `bug.php` file shows the problematic code, while `bugSolution.php` offers a solution to mitigate this behavior.

## How to Reproduce

1. Clone the repository.
2. Run `bug.php`.
3. Observe the output and compare it to the expected behavior. Note how passing by reference changes the behavior.

## Solution

The solution involves either creating a copy of the array or using a more suitable array manipulation technique that doesn't modify the original array in-place.