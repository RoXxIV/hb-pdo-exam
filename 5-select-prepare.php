<?php

include 'includes/connect.php';
$sql = "SELECT product.name,description,price,category.name AS category,stock
FROM `product`
LEFT JOIN category on product.id = category.id";


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


