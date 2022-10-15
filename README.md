# Webdev Unit Test Example
A simple password validator with unit tests, meant to be used as an example.

## Requirements
- PHP 8+
- Composer

## How to run
1. Install the project dependencies using composer:
   ```
   $ composer install
   ```

2. Run tests
   ```
   $ composer run test
   ```

## Expected output:
```
PHPUnit 9.5.25

Password Validator
 ✔ It passes a good password
 ✔ It requires at least twelve characters
 ✔ It requires uppercase letters
 ✔ It requires lowercase letters
 ✔ It requires numbers
 ✔ It requires special characters

Time: 00:00.005, Memory: 4.00 MB

OK (6 tests, 6 assertions)
```

## Bonus
There is a commented out test that exposes a bug in our validator. After uncommenting it, you should get the following output:

```
PHPUnit 9.5.25 #StandWithUkraine

Password Validator
 ✔ It passes a good password
 ✔ It requires at least twelve characters
 ✔ It requires uppercase letters
 ✔ It requires lowercase letters
 ✔ It requires numbers
 ✔ It requires special characters
 ✘ It handles multibyte characters
   ┐
   ├ Failed asserting that true is false.
   │
   ╵ /app/PasswordValidatorTest.php:34

(...)

FAILURES!
Tests: 7, Assertions: 7, Failures: 1.
```

Can you fix this bug?
