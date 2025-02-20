<!DOCTYPE html>
<html lang="en">
<head>
<title> Home Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

   <!-- Link to  template -->
   <link rel="import" href="template.html" id="imported-template">
   
    
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons -->

     <!-- JavaScript to manipulate the template -->
     <script>
        // Wait for the document to load
        document.addEventListener("DOMContentLoaded", function() {
            // Get the imported template
            const template = document.getElementById("imported-template").import;
            
            // Access elements within the template using IDs
            const header = template.querySelector("#header");
            const mainContent = template.querySelector("#main-content");
            const footer = template.querySelector("#footer");
            
            // Manipulate the elements as needed
            header.innerHTML = "<h1>New Header Title</h1>";
            mainContent.innerHTML = "<p>This is the modified main content.</p>";
            footer.innerHTML = "<p>&copy; 2024 Modified Website. All rights reserved.</p>";
            
            // Append the modified template to the body of this page
            document.body.appendChild(template);
        });
    </script>


</head>
<body>
<?php @include 'template.html'; ?>



 <!-- about -->
 <div class="container">
    <h1 class="text-center" style="margin-top: 50px;">ABOUT</h1>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="./image/about.png" alt="">
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
           <p> Welcome to Dream House Furniture Ordering and Renting System!<p>

            At Dream House, we believe that furnishing your living space should be a delightful experience, not a hassle. Our mission is to simplify the process of acquiring high-quality furniture for your dream home, whether you're looking to buy outright or rent for temporary needs.
            
            With our user-friendly online platform, you can explore an extensive catalog of stylish and functional furniture pieces that suit your taste and lifestyle. From contemporary sofas to elegant dining sets, we offer a diverse range of options to cater to every preference and budget.</p>
        </div>
    </div>
</div>
<!-- about -->
<?php @include 'footer.html'; ?>

      
    </body>
    </html>