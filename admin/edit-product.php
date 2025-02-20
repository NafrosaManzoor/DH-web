<?php

/*
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "dream_house";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `categories`";

$result1 = mysqli_query($connect, $query);
?>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-7 position-relative z-index-2">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $product = getByID("products", $id);

                                if (mysqli_num_rows($product) > 0) {
                                    $data = mysqli_fetch_array($product);
                            ?>

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Edit Products</h4>
                                        </div>


                                        <div class="card-body">
                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="mb-0">Select Categorie</label>
                                                        <select name="category_id" class="form-select">
                                                            <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                                                            <?php endwhile; ?>

                                                        </select>

                                                    </div>

                                                    <div class="col-md-5"><br><br><br><br>
                                                        <label class="mb-0" for="productName">Product Name</label>
                                                        <input class="order-inpttext" type="text" name="name" id="" placeholder="Enter product "><br>
                                                    </div><br><br>

                                                    <div class="col-md-12"><br>
                                                        <label class="mb-0" for="productimage1">Image</label><br>
                                                        <input class="order-inpttext" type="file" name="my_file" id="" height="50px" width="50px"><br>
                                                    </div><br>

                                                    <div class="col-md-6"><br>
                                                        <label class="mb-0" for="productName"> Price </label><br>
                                                        <input class="order-inpttext" type="number" name="price" id="" placeholder="Enter Price "><br>
                                                    </div><br>

                                                    <div class="col-md-12"><br>
                                                        <label class="mb-0" for="detailedDescription"> Description</label><br>
                                                        <textarea rows="3" texta type="text" name="description" id="" placeholder="Enter Description"></textarea><br>
                                                    </div><br>

                                                    <div class="col-md-6"><br>
                                                        <button type="submit" class="btn btn-primary" name="update_products_btn">Update</button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>

                                <?php
                                } else {
                                    echo "Product Not Found";
                                }
                            } else {
                                echo "Id missing from url";
                            }
                                ?>
                                    </div>
                        </div>
                    </div>
                </div>
                <?php @include 'includes/footer.php'; */ ?>

<?php @include 'includes/header.php';
@include('./config/dbconnect.php');
@include('./function/myfunctions.php'); ?>
<style>
    .small-select {
        width: 200px;

    }
</style>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-7 position-relative z-index-2">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $product = getByID("products", $id);

                                if (mysqli_num_rows($product) > 0) {
                                    $data = mysqli_fetch_array($product);
                            ?>

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Edit Product</h4>
                                        </div>


                                        <div class="card-body">
                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="">Select Category </label>
                                                        <select name="category_id" class="form-select small-select">
                                                            <option selected>Select Category </option>
                                                            <?php
                                                            $categories = getAll("categories");

                                                            if (mysqli_num_rows($categories) > 0) {

                                                                foreach ($categories  as $item) {
                                                            ?>
                                                                    <option value=" <?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>> <?= $item['name']; ?></option>
                                                            <?php
                                                                }
                                                            } else {
                                                                echo "No Categories Found";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div><br>
                                                    <input type="hidden" name="product_id" value="<?= $data['id'] ?>">
                                                    <div class="col-md-12">
                                                        <label class="order-label" for="productName">Product Name</label> <br>
                                                        <input class="order-inpttext" type="text" name="name" id="" value="<?= $data['name']; ?>" placeholder="Enter Product "><br>
                                                    </div><br>

                                                    <div class="col-md-12"><br>
                                                        <label class="order-label" for="productimage1">Image</label><br>
                                                        <input class="order-inpttext" type="file" name="image" id="" height="50px" width="50px"><br>
                                                        <label class="order-label" for="productimage1">Current Image</label><br>
                                                        <img src="./uploads/<?= $data['image'] ?>" alt="product image" height="50px" width="50px">
                                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">

                                                    </div>
                                                </div><br><br>

                                                <div class="col-md-12"><br>
                                                    <label class="mb-0" for="productName"> Price </label><br>
                                                    <input class="order-inpttext" type="number" name="price" id="" value="<?= $data['price']; ?>" placeholder="Enter Price "><br>
                                                </div> <br>

                                                <div class="col-md-12"><br>
                                                    <label class="order-label" for="detailedDescription"> Description</label><br>
                                                    <textarea rows="3" texta type="text" name="description" id="" placeholder="Enter Description"> value="<?= $data['description']; ?>"</textarea><br>
                                                </div><br>



                                                <div class="col-md-6"><br>
                                                    <button type="submit" class="btn btn-primary" name="update_products_btn"> Update</button>
                                                </div>




                                        </div>
                                        </form>
                                    </div>
                            <?php
                                } else {
                                    echo "Product Not Found";
                                }
                            } else {
                                echo "Id missing from url";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php @include 'includes/footer.php'; ?>