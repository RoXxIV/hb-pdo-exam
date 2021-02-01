<?php

include 'includes/connect.php';
$sql = "SELECT product.name,description,price,category.name AS category,stock
FROM `product`
JOIN product_has_category on product_has_category.id_product = product.id
JOIN category on category.id = product_has_category.id_category";


$results = $connection->query($sql);
$data = $results->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Catégories</th>
        <th>En stock</th>
    </tr>
    <?php foreach ($data as $beanie) {
    echo'<tr>
            <td>'.$beanie['name'].'</td>
            <td>'.$beanie['description'].'</td>
            <td>'.$beanie['price'].'</td>
            <td>'.$beanie['category'].'</td>
            <td>'.$beanie['stock'].'</td>
        </tr>';
} ?>
</table>
