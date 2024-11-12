<?php

require '../inventory_data.php';

/**
 * Calculate the total inventory value for items in stock
 * It multiplies quantity and price for each in-stock variant and sums them up.
 * 
 * @param array $inventory Array of product with their variant and stock information
 * @param float total inventory value of items in stock
 */ 

 function calculateTotalInventoryValue ( $inventory ) {
    $totalValue = 0;

    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {
            if ( $variant['quantity'] > 0 ) {
                $totalValue += $variant['quantity'] * $variant['price'];
            }
        }
    }
    return $totalValue;
 }

 $totalValue = calculateTotalInventoryValue( $inventory );
 echo 'The total value of items in stock is '. '$' . $totalValue;