<?php

namespace App;

class CourseDAO
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function save(Course $course)
    {
        $sql = "INSERT INTO courses (name, description) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $courseName = $course->getName();
        $description = $course->getDescription();
        $stmt->bindParam(1, $courseName);
        $stmt->bindParam(2, $description);
        $stmt->execute();
        $id = (int) $this->pdo->lastInsertId();
        $course->setId($id);
    }

    public function find(int $id)
    {
        $sql = "SELECT * FROM courses WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        if ($result) {
            $course = new Course($result['name'], $result['description']);
            $course->setId($id);
            return $course;
        }
        return null;
    }

    public function getEntities(): array
    {
        $sql = "SELECT * FROM courses";
        $stmt = $this->pdo->query($sql);

        $courses = [];

        while ($row = $stmt->fetch()) {
            $course = new Course($row['name'], $row['description']);
            $course->setId($row['id']);
            $courses[] = $course;
        }

        return $courses;
    }
}
