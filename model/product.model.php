<?php

$products = [
    0=>['libele'=>'Huile','ref'=>'ref1','prix'=>2000,'quantite'=>12],
    1=>['libele'=>'Sucre','ref'=>'ref2','prix'=>500,'quantite'=>9],
];

$productsArchived = [];

function getProductByLibele (array $products, string $value): int{
    foreach ($products as $index => $product) {
                    if ($product["libele"] == $value){
                    return $index;
                }
            }
            return -1 ;
}

    function supprimerProduit (int $index, array &$products): array {
            return array_splice($products, $index, 1)[0];
            
    }    