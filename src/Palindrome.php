<?php
    class Palindrome
    {
        function palindromeTester($string)
        {
            return strtolower($string) == strtolower(strrev($string));
        }

        function palindromeTesterHard($string)
        {
            $string = strtolower($string);
            $letters = str_split($string);
            $reversed_letters = [];
            foreach ($letters as $letter) {
                array_unshift($reversed_letters, $letter);
            }
            return $string == implode($reversed_letters);
        }
    }
?>
