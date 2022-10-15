<?php

use PHPUnit\Framework\TestCase;

require_once "PasswordValidator.php";

class PasswordValidatorTest extends TestCase {
    public function test_it_passes_a_good_password() {
        $this->assertTrue(PasswordValidator::validate('3fHfs@5BMWc*'));
    }

    public function test_it_requires_at_least_twelve_characters() {
        $this->assertFalse(PasswordValidator::validate('3fHfs@5BMc*'));
    }

    public function test_it_requires_uppercase_letters() {
        $this->assertFalse(PasswordValidator::validate('3fhfsa5bmwca'));
    }

    public function test_it_requires_lowercase_letters() {
        $this->assertFalse(PasswordValidator::validate('3FHFSA5BMWCA'));
    }

    public function test_it_requires_numbers() {
        $this->assertFalse(PasswordValidator::validate('afHfs@aBMWc*'));
    }

    public function test_it_requires_special_characters() {
        $this->assertFalse(PasswordValidator::validate('3fHfsa5BMWca'));
    }

    public function test_it_handles_multibyte_characters() {
        // This should fail as it has only 9 characters
        $this->assertFalse(PasswordValidator::validate('3fH@パスワード'));
    }
}
