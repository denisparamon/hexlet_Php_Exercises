<?php

namespace App\Solution;

function run()
{
    $conn = new \PDO('sqlite::memory:');
    $conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    $queryCreateTable = "
    CREATE TABLE IF NOT EXISTS films (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        release_year INTEGER NOT NULL,
        duration INTEGER NOT NULL
    )";
    $conn->exec($queryCreateTable);

    $queryInsertFilm1 = "
    INSERT INTO films (title, release_year, duration) 
    VALUES ('Godfather', 1972, 175)";
    $conn->exec($queryInsertFilm1);

    $queryInsertFilm2 = "
    INSERT INTO films (title, release_year, duration) 
    VALUES ('The Green Mile', 1999, 189)";
    $conn->exec($queryInsertFilm2);

    $sql3 = "SELECT * FROM films";
    $stmt = $conn->query($sql3);
    return $stmt->fetchAll();
}
