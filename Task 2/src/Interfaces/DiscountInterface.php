<?php

namespace Src\Interface;

interface DiscountInterface
{
    // Getting Total
    public function getTotal(array $cart): int;

    // Getting 10% if it's possible 
    public function tenPercent(array $cart, int $total): int;

    // Getting 5% if it's possible 
    public function fivePercent(array $cart, int $total): int;

    // Sum all discounts and return total price
    public function totalPrice(int $total, int $ten, int $five): int;
}