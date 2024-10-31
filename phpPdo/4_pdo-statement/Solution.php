<?php

namespace App\Solution;

function getOrderCount($month)
{
    $conn = new \PDO('sqlite:hexlet');
    $conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    $sql = file_get_contents("init.sql");
    $conn->exec($sql);

    $sqlQuery = "
        SELECT c.customer_name, SUM(o.total_amount) as total
        FROM customers c
        JOIN orders o ON c.customer_id = o.customer_id
        WHERE strftime('%m', o.order_date) = :month
        GROUP BY c.customer_id
        ORDER BY c.customer_name -- Добавлено для упорядочивания по имени покупателя
    ";

    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':month', str_pad($month, 2, '0', STR_PAD_LEFT), \PDO::PARAM_STR);
    $stmt->execute();

    $results = $stmt->fetchAll();

    $output = [];
    foreach ($results as $row) {
        $output[] = "Покупатель {$row['customer_name']} совершил покупок на сумму {$row['total']}";
    }

    return implode("\n", $output);
}
