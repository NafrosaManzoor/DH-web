<?php


include('./admin/config/dbconnect.php');
include('./admin/function/myfunctions.php');

if (isset($_GET['id'])) {
    $category_id = $_GET['id'];
    $products = getProductsByCategory($category_id);
    if ($products && mysqli_num_rows($products) > 0) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Category Details</title>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="service.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mt-4 text-center">Products</h1>
                        <div class="row">
                            <?php
                            while ($product = mysqli_fetch_assoc($products)) {
                            ?>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <img src="./admin/uploads/<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>" height="200px" width="200px">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name']; ?></h5>
                                            <p class="card-text"><?= $product['description']; ?></p>
                                            <p class="card-text">$<?= $product['price']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>

<?php
    } else {
        echo "<p>No products found in this category</p>";
    }
} else {
    echo "<p>Invalid category ID</p>";
}

// Function to get products by category
function getProductsByCategory($category_id)
{
    global $conn;
    $query = "SELECT * FROM products WHERE category_id='$category_id'";
    return mysqli_query($conn, $query);
}
?>