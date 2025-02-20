<?php
include('./config/dbconnect.php');
include('./function/myfunctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.min.css">
</head>

<body>
    <?php @include 'includes/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-4">Categories</h1>
                <div class="row">
                    <?php
                    $category = getAll("categories");

                    if (mysqli_num_rows($category) > 0) {
                        foreach ($category as $item) {
                    ?>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="./uploads/<?= $item['my_file']; ?>" class="card-img-top" alt="<?= $item['name']; ?>" height="200px" width="200px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $item['name']; ?></h5>
                                        <p class="card-text"><?= $item['description']; ?></p>
                                        <a href="display_category_details.php?id=<?= $item['id']; ?>" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>No categories found</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php @include 'includes/footer.php'; ?>
</body>

</html>