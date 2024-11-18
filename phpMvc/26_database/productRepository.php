<?php

namespace App;

class ProductsRepository
{
    private \PDO $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getEntities(): array
    {
        $products = [];
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);

        while ($row = $stmt->fetch()) {
            $product = Product::fromArray($row);
            $product->setId($row['id']);
            $products[] = $product;
        }

        return $products;
    }

// BEGIN
    public function find(int $id): ?Product
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        if ($row = $stmt->fetch()) {
            $product = Product::fromArray($row);
            $product->setId($row['id']);
            return $product;
        }

        return null;
    }

    public function save(Product $product): void
    {
        if (!$product->exists()) {
            $sql = "INSERT INTO products (title, price) VALUES (:title, :price)";
            $stmt = $this->conn->prepare($sql);
            $title = $product->getTitle();
            $price = $product->getPrice();
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            $id = (int) $this->conn->lastInsertId();
            $product->setId($id);
        }
    }
// END
}
