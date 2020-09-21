<?php

function PalindromeChecker($input_string)
{
    $string = str_replace(' ', '', strtolower($input_string));
    if(strrev($string) == $string)
    {
        printf("Input String: %s is a Palindrome <br>", $input_string);
    }else{
        printf("Input String: %s is not a Palindrome <br>", $input_string);
    }
}

PalindromeChecker("test");
PalindromeChecker("madam");
PalindromeChecker("nurses run");
PalindromeChecker("Madam");
PalindromeChecker("Nurses Run");




?>