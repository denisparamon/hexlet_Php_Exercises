//Изменения файлы Cart.right.php

<?php

namespace App\Implementations;

class Cart
{
    private $items;
    private $discountPercentage;
    private $fixedDiscountAmount;

    public function __construct()
    {
        $this->items = [];
        $this->discountPercentage = 0;
        $this->fixedDiscountAmount = 0;
    }

    public function addItem(string $name, float $price, int $quantity = 1): void
    {
        if (!isset($this->items[$name])) {
            $this->items[$name] = [
                'price' => $price,
                'quantity' => $quantity,
            ];
        } else {
            $this->items[$name]['quantity'] += $quantity;
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        if ($this->discountPercentage > 0) {
            $total -= $total * ($this->discountPercentage / 100);
        }

        if ($this->fixedDiscountAmount > 0) {
            $total -= $this->fixedDiscountAmount;
        }

        return $total < 0 ? 0 : $total;
    }

    public function setDiscount(int $percentage, float $amount): void
    {
        $this->discountPercentage = $percentage;
        $this->fixedDiscountAmount = $amount;
    }
}

//Изменеия основного файла solution


namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Implementations\Cart;

class SolutionTest extends TestCase
{
    public function testCart(): void
    {
        $cart = new Cart();

        $cart->addItem('Apple', 1.0, 3);
        $cart->addItem('Banana', 0.5, 5);

        $this->assertEquals(5.5, $cart->getTotal());

        $cart->setDiscount(10, 0);  // 10% discount
        $this->assertEquals(4.95, $cart->getTotal());

        $cart->setDiscount(0, 2);  // $2 fixed discount
        $this->assertEquals(3.5, $cart->getTotal());

        $cart->setDiscount(10, 2);  // 10% discount + $2 fixed discount
        $this->assertEquals(2.95, $cart->getTotal());

        $cart->setDiscount(0, 10);  // $10 fixed discount, should not go negative
        $this->assertEquals(0, $cart->getTotal());
    }
}
