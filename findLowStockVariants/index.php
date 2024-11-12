<?php 

require '../inventory_data.php';

/**
 * Find products with low stock variants (quantity less than 5) and print them directly.
 * 
 * @param array $inventory Array of products with their variants and stock information
 */ 

function findLowStockVariants ( $inventory ) {
    echo "Low stock variants's: <br>";

    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {
            if ( $variant['quantity'] < 5 ) {
                echo "- {$product['name']} {$variant['model']} {$variant['color']} {$variant['size']} with {$variant['quantity']} units <br>";
            }
        }
    }
}

findLowStockVariants($inventory);
