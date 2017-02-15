<?php
    class Palindrome
    {
        function palindromeTester($string)
        {
            return strtolower($string) == strtolower(strrev($string));
        }
    }
?>
