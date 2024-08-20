<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Course;

class CourseTest extends TestCase
{
    public function testGetName()
    {
        // Создаем объект класса Course с именем "PHP Basics"
        $course = new Course("PHP Basics");

        // Проверяем, что метод getName() возвращает правильное имя
        $this->assertEquals("PHP Basics", $course->getName());
    }
}
