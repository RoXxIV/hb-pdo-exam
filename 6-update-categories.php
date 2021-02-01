<?php

include 'includes/connect.php';

$sql = "SELECT product.name,description,price,category.name AS category,stock
FROM `product`
LEFT JOIN category on product.id = category.id
WHERE category.name IS NULL";

$sql2 = "SELECT * FROM category";
