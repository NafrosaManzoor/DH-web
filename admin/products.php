<?php /*
session_start();
if(!isset($_SESSION["email"])){
    header("Location:admin_log.php");
    exit();
}

$email=$_SESSION["email"];*/
?>

<?php
@include 'includes/header.php';
@include('./function/myfunctions.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Products
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = getAll("products");

                            if (mysqli_num_rows($products) > 0) {
                                foreach ($products as $item) {
                            ?>

                                    <tr>
                                        <td><?= $item['id']; ?> </td>
                                        <td><?= $item['name']; ?></td>
                                        <td>
                                            <img src="./uploads/<?= $item['image']; ?> " alt="<?= $item['name']; ?>">
                                        </td>
                                        <td>
                                            <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-primary"> Edit </a>

                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="products_id" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete_products_btn">Delete</button>
                                            </form>
                                        </td>

                                    </tr>

                            <?php

                                }
                            } else {
                                echo "No records found";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php @include 'includes/footer.php'; ?>