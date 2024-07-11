<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Src\DiscountService;

// Cart
$shoppingCart = [
    ['product' => 'Телефон', 'price' => 1200],
    ['product' => 'Наушники', 'price' => 800],
    ['product' => 'Ноутбук', 'price' => 1500],
];

// Getting service
$discountService = new DiscountService();

// Getting total price
$total = $discountService->getTotal($shoppingCart);

// Getting 10% discount if it's possible
$tenPercent = $discountService->tenPercent($shoppingCart, $total);

// Getting 5% discount if it's possible
$fivePercent = $discountService->fivePercent($shoppingCart, $total);

// Sum all discounts and return total price
echo $discountService->totalPrice($total, $tenPercent, $fivePercent);