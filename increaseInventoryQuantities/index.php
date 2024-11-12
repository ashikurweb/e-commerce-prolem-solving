<?php 

require '../inventory_data.php';

/**
 * Increase the quantity of each variant by a given ammount.
 * Print the updated quantity of each variant.
 * 
 * @param array $inventory Array of product with their variant and stock information
 * @param return $increaseAmount the ammount to increase each variant's quantity by 
 */ 

function increaseInventoryQuantities ( $inventory, $increaseAmmount ) {
    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {
            $variant['quantity'] += $increaseAmmount;
            echo "{$product['name']} {$variant['model']} {$variant['color']} {$variant['size']} now has {$variant['quantity']} units <br>";
        }
    }
}

increaseInventoryQuantities( $inventory, 2 );