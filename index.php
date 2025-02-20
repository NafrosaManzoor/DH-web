<?php
/*session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> Home Page</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="service.css">

  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Link to  template -->
  <link rel="import" href="template.html" id="imported-template">
  <link rel="import" href="content.html" id="imported-template">
  <link rel="import" href="footer.html" id="imported-template">


  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


</head>

<body>
  <?php
  session_start();
  include('./admin/config/dbconnect.php');
  @include 'template.html';
  @include './admin/function/myfunctions.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-4">
          <center>Categories</center>
        </h1>
        <div class="row">
          <?php
          $category = getAll("categories");

          if (mysqli_num_rows($category) > 0) {
            foreach ($category as $item) {
          ?>
              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="./admin/uploads/<?= $item['my_file']; ?>" class="card-img-top" alt="<?= $item['name']; ?>" height="200px" width="200px">
                  <div class="card-body">
                    <h5 class="card-title"><?= $item['name']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                    <!--<a href="display_category_details.php?id=<?= $item['id']; ?>" class="btn btn-primary">View Details</a>-->
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



  <?php @include 'service.html'; ?>

  <?php @include 'footer.html'; ?>

</body>

</html>


<!-- Navbar links -->