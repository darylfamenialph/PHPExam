<?php

function FibonacciChecker($n)
{
    for($x = 1; $x <= $n; $x++)
    {
        $number_plus = 5*pow($x,2) + 4;
        $number_minus = 5*pow($x,2) - 4;

        if(sqrt($number_plus) == floor(sqrt($number_plus)) || sqrt($number_minus) == floor(sqrt($number_minus)))
        {
            printf("%s is a Fibonacci Number <br>", $x);
        }else{
            printf("%s is not a Fibonacci Number <br>", $x);
        }
    }
}

FibonacciChecker(50);



?>