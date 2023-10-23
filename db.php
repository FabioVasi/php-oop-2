<?php

$products = [];

array_push(
    $products,
    new Alimentation('Dog', 40, 'Kiddle', 'cane', 25),
    new Alimentation('Cat', 25, 'Kiddle', 'gatto', 5),
    new Kennel('Dog', 80, 'Kennel', 'cane', 75, 50, 15, 5),
    new Kennel('Cat', 120, 'Kennel', 'gatto', 80, 150, 40, 25),
    new Toys('Dog', 15, 'Ball', 'cane', 'Rubber', 3),
    new Toys('Cat', 15, 'Ball', 'gatto', 'Wool', 1)
);