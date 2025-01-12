<?php

$products = [
  [
    "id" => 9001,
    "label" => "iPhone 11",
    "category" => "Apple",
    "price" => 999
  ],
  [
    "id" => 9002,
    "label" => "Sumsung Galaxy S20",
    "category" => "Samsung",
    "price" => 1200
  ],
  [
    "id" => 9003,
    "label" => "PS5",
    "category" => "Sony",
    "price" => 1600
  ],
  [
    "id" => 9003,
    "label" => "Nike React 87",
    "category" => "Nike",
    "price" => 89
  ],
];

for ($i = 0; $i < count($products); $i++) {
  echo "Product number: {$products[$i]['id']}";
}