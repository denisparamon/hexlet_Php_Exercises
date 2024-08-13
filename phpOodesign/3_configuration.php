<?php

namespace App;

class PasswordValidator
{
    private int $minLength;
    private bool $containNumbers;

    public function __construct(array $options = [])
    {
        $this->minLength = $options['minLength'] ?? 8;
        $this->containNumbers = $options['containNumbers'] ?? false;
    }

    public function validate(string $password): array
    {
        $errors = [];

        // Проверка минимальной длины
        if (strlen($password) < $this->minLength) {
            $errors['minLength'] = 'too small';
        }

        // Проверка наличия цифр
        if ($this->containNumbers && !$this->hasNumber($password)) {
            $errors['containNumbers'] = 'should contain at least one number';
        }

        return $errors;
    }

    private function hasNumber(string $subject): bool
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}
