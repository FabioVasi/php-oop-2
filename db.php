<?php

$products = [];

array_push(
    $products,
    $kibble = new Alimentation('Dog', 40, 'Kiddle', 'cane', 25),
    $kibble = new Alimentation('Cat', 25, 'Kiddle', 'gatto', 5),
    $kennel = new Kennel('Dog', 80, 'Kennel', 'cane', 75, 50, 15, 5),
    $kennel = new Kennel('Cat', 120, 'Kennel', 'gatto', 80, 150, 40, 25),
    $toy = new Toys('Dog', 15, 'Ball', 'cane', 'Rubber', 3),
    $toy = new Toys('Cat', 15, 'Ball', 'gatto', 'Wool', 1)
);