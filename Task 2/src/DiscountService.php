<?php

namespace Src;

class DiscountService
{
    // Getting service
    public function getTotal(array $cart): int
    {
        // Total price
        $total = 0;

        // Sul all prices 
        foreach($cart as $product) {
            $total += $product['price'];
        }

        // Return it
        return $total;
    }

    // Getting 10% if it's possible 
    public function tenPercent(array $cart, int $total): int
    {
        // Create discount sum
        $discount = 0;

        // Checking for price more than 1000
        foreach($cart as $product) {
            if ($product['price'] > 999) {

                // Make 10% dicsount for all
                $discount = $total * 0.1;
            }
        }

        // Return discount
        return $discount;
    }

    // Getting 5% if it's possible 
    public function fivePercent(array $cart, int $total): int
    {
        // Create discount sum
        $discount = 0;

        // Checking for amount more than 3
        if (count($cart) > 2) {

            // Make 5% dicsount for all
            $discount = $total * 0.05;
        }

        // Return discount
        return $discount;
    }

    // Sum all discounts and return total price
    public function totalPrice(int $total, int $ten, int $five): int
    {
        return $total - ($ten + $five);
    }
}