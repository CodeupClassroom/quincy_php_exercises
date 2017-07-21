# FizzBuzz

> Write a program that prints the numbers from 1 to 100. But for multiples of
> three print “Fizz” instead of the number and for the multiples of five print
> “Buzz”. For numbers which are multiples of both three and five print
> “FizzBuzz”.

One approach to solving this problem:

1. Write a loop that outputs the numbers from 1 to 100

2. In the PHP repl, figure out how to check if a number is divisible by 3

    Hint: what does the `%` operator do?

3. Inside of your loop, check if each number is divisible by 3

    - If it is evenly divisible by 3, output "fizz"
    - If it is not evenly divisible by 3, just output the number

4. Do the same as above, but add checks for 5 as well

5. Handle the case where the number is divisible by both 3 and 5.
