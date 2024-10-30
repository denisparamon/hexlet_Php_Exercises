<?php

namespace App\Solution;

function run()
{
    $conn = new \PDO('sqlite::memory:');
    $conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    $sql = "CREATE TABLE products(
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              name VARCHAR(255)
            )";
    $conn->exec($sql);

    $products = ["computer", "mobile phone", "tv", "kettle"];

    // BEGIN (write your solution here)
    $sqlInsert = "INSERT INTO products (name) VALUES (:name)";
    $stmt = $conn->prepare($sqlInsert);

    foreach ($products as $product) {
        $stmt->bindValue(':name', $product, \PDO::PARAM_STR);
        $stmt->execute();
    }
    // END

    $sql2 = "SELECT * FROM products";
    $stmt = $conn->query($sql2);
    return $stmt->fetchAll();
}
