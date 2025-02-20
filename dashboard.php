<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furniture Space</title>
    <link rel="icon" type="image/png" href="favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io\favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="style2.css">
</head>

<body>


    <div class="heros-wrapper">
        <!-- Navigation -->

        <?php 
  
  include 'template.html';
  
  ?>


        <div class="herosection">
            <div class="pandbtnhero">
                <p class="main-statement">
                    Admin Dashboard </p>

            </div>
            <img class="heroimg" src="new image\admin-concept-illustration_114360-2332__1_-removebg-preview.png"
                alt="Heroes">
        </div>

    </div>

    <div class="adminsection" id="productgallery">
        <h2 class="adminheading">Admin Tools </h2>

        <div class="adminp">

            <div class="admint"><a class ="displayanc" href="dh/new/deleteproduct.php">Delete Products</a></div>
            <div class="admint"><a class ="displayanc" href="displayproducts.php">View Products</a></div>
            <div class="admint"><a class ="displayanc" href="updateproduct.php">Update products</a></div>
            <div class="admint"><a class ="displayanc" href="displayorder.php"> View Orders</a></div>
            <div class="admint"><a class ="displayanc" href="addproducts.php"> Add Products</a></div>
            <div class="admint"><a class ="displayanc" href="deleteorder.php">Delete Orders</a></div>
            <div class="admint"><a class ="displayanc" href="updateorder.php">Update Orders</a></div>
            <div class="admint"><a class ="displayanc" href="displayusers.php">View User</a></div>
            <div class="admint"><a class ="displayanc" href="deleteuser.php"> Delete User</a></div>

        </div>
    </div>


    <!-- footer -->
    <?php 
  
  include 'footer.html';
  
  ?>

    <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
    <script src="index.js"></script>
</body>


</html>