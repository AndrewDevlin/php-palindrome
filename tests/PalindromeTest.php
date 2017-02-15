<?php
    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_palindrome()
        {
            // Arrange
            $new_palindrome = new Palindrome;
            $input = 'bob';

            // Act
            $result = $new_palindrome->palindromeTester($input);

            // Assert
            $this->assertEquals(true, $result);
        }
    }
?>
