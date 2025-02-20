<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <!-- Add Category -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Category</h5>
          <form action="add_category.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="category_name" placeholder="Category Name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Product -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Product</h5>
          <form action="add_product.php" method="POST" enctype="multipart/form-data">
          </form></div></div></div></div></div></body></html>
