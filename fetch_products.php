<?php
require_once("config.php");

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch()) {
    echo '<div class="col-md-4">';
    echo '<div class="card">';
    echo '<img src="' . $row['image'] . '" class="card-img-top" alt="Product Image">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row['name'] . '</h5>';
    echo '<p class="card-text">' . $row['description'] . '</p>';
    echo '<button type="button" class="btn btn-primary" onclick="showOrderForm(' . $row['id'] . ')">Order</button>';
    echo '<button type="button" class="btn btn-primary" onclick="showRentForm(' . $row['id'] . ')">Rent</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
