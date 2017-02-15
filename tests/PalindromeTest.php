<?php
    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_palindrome()
        {
            // Arrange
            $tests = array(
                array('bob', true),
                array('mike', false),
                array('Bob', true)
            );

            $new_palindrome = new Palindrome;

            foreach ($tests as $test) {
                // Arrange
                $input = $test[0];
                $expected_result = $test[1];

                // Act
                $actual_result = $new_palindrome->palindromeTester($input);

                // Assert
                $this->assertEquals($expected_result, $actual_result);
            }
        }
    }
?>
