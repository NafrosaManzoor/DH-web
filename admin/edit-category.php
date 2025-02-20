<?php @include 'includes/header.php';
@include('./function/myfunctions.php');
@include('./config/dbconnect.php'); ?>
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
                                $category = getByID("categories", $id);

                                if (mysqli_num_rows($category) > 0) {
                                    $data = mysqli_fetch_array($category);
                            ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Edit Categories</h4>
                                        </div>


                                        <div class="card-body">
                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                                        <label class="order-label" for="productName">Categorie Name</label>
                                                        <input class="order-inpttext" type="text" name="name" value="<?= $data['name'] ?>" id="" placeholder="Enter Categorie "><br>
                                                    </div><br>

                                                    <div class="col-md-12"><br>
                                                        <label class="order-label" for="detailedDescription"> Description</label><br>
                                                        <textarea rows="3" texta type="text" name="description" id="" placeholder="Enter Description"> <?= $data['description'] ?></textarea><br>
                                                    </div><br>

                                                    <div class="col-md-12"><br>
                                                        <label class="order-label" for="productimage1">Selcting Image</label><br>
                                                        <input class="order-inpttext" type="file" name="my_file" id=""><br>
                                                        <img src="./uploads/<?= $data['my_file'] ?>" height="20px" width="20px">
                                                        <input type="hidden" name="old_image" value="<?= $data['my_file'] ?>">
                                                    </div>

                                                    <div class="col-md-6"><br>
                                                        <button type="submit" class="btn btn-primary" name="update_categorie_btn"> Update</button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                } else {
                                    echo "Categories Not Found";
                                }
                            } else {
                                echo "Id missing from url";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php @include 'includes/footer.php'; ?>