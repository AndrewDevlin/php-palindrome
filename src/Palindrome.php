<?php
    class Palindrome
    {
        function palindromeTester($string)
        {
            return $string == strrev($string);
        }
    }
?>
