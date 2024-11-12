<?php 

require '../inventory_data.php';

/**
 * This function check the stock status for each variant of each product.
 * It loop through the inventory and prints if a variant is in stock or out of stock.
 * 
 * @param array $inventory Array of product with their variant and stock information. 
 */ 

function checkStockStatus ( $inventory ) {
    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {

            if ( $variant['quantity'] > 0 ) {
                echo "{$product['name']} {$variant['model']} {$variant['color']} {$variant['size']} is in stock {$variant['quantity']} units available <br>";
            } else {
                echo "{$product['name']} {$variant['model']} {$variant['color']} {$variant['size']} is out of stock <br>";
            }

        }
    }
}

checkStockStatus( $inventory );