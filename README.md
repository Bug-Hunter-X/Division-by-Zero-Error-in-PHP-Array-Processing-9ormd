# Division by Zero Bug in PHP
This repository demonstrates a common error in PHP: division by zero when calculating the average of an array.  The `bug.php` file contains the erroneous code, while `bugSolution.php` provides a corrected version.

The bug arises from the lack of error handling when calculating the average. If the input array is empty, attempting to divide by zero will cause a fatal error, halting execution.

The solution demonstrates a robust approach by checking if the array is empty before performing the calculation. This ensures the program handles edge cases gracefully.
