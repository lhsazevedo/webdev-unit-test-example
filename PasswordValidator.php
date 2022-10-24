<?php

class PasswordValidator {
    public static function validate($string): bool
    {
        // Disclaimer: This implementation is optimized for
        // demonstration purposes intead of readability or performance.

        $hasMinimumLength = strlen($string) >= 12;
        $hasNumbers = preg_match('/[0-9]+/', $string) === 1;
        $hasUppercaseLetters = preg_match('/[A-Z]+/', $string) === 1;
        $hasLowercaseLetters = preg_match('/[a-z]+/', $string) === 1;
        $hasSpecialCharacters = preg_match('/[!@#$%^&*]+/', $string) === 1;
        
        return $hasMinimumLength
            && $hasNumbers
            && $hasUppercaseLetters
            && $hasLowercaseLetters
            && $hasSpecialCharacters;
    }
}
