<?php

$produits=[
    "orange"=>3,
    "fromage"=>5,
    "jambon"=>9,
    "caviar"=>50
];

$somme=array_sum($produits);
echo "Le prix total des produits est de : ".$somme." euros.";