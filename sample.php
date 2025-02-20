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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    <!-- Link to  template -->
    <link rel="import" href="template.html" id="imported-template">
    <link rel="import" href="content.html" id="imported-template">
    <link rel="import" href="footer.html" id="imported-template">


    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons -->



</head>

<body>
    <?php @include 'template.html'; ?>

    <!-- card2 -->
    <div class="container">
        <div class="row" style="margin-top: 100px;">



            <?php
            // Sample product data
            $products = [
                [
                    "id" => 1,
                    "name" => "New Chair",
                    "image" => "./image/card3.png",
                    "price" => 300.20,
                    "description" =>  "Let's Choose"
                ],
                [
                    "id" => 2,
                    "name" => "Modern Chair",
                    "image" => "./image/card4.png",
                    "price" => 500.50,
                    "description" => "Let's Choose"
                ],
                [
                    "id" => 3,
                    "name" => "Best Chair",
                    "image" => "./image/card5.png",
                    "price" => 900.50,
                    "description" =>  "Let's Choose"
                ],
                [
                    "id" => 4,
                    "name" => "Stylish Chair",
                    "image" => "./image/card3.png",
                    "price" => 900.50,
                    "description" =>  "Let's Choose"
                ]
            ];

            // Display each product
            foreach ($products as $product) {
            ?>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card" id="tpc">
                        <img class="card-img-top" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <div class="card-body">
                            <h3 class="card-titel text-center"><?php echo $product['name']; ?></h3>
                            <p class="card-text text-center"><?php echo $product['description']; ?></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="showForm(<?php echo $product['id']; ?>)">Order</button>

                            </div>
                        </div>
                        <small class="text-muted">$<?php echo $product['price']; ?></small>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
    <!-- card2 -->


    <!-- Order Form Modal -->
    <div class="modal fade" id="orderFormModal" tabindex="-1" role="dialog" aria-labelledby="orderFormModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderFormModalLabel">Order Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="orderForm" method="POST" action="product_order.php">
                        <input type="hidden" id="productId" name="productId" value="">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp number:</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Delivery address:</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Select city:</label>
                            <select class="form-control" id="city" name="city" required>
                                <option value="Ampara">Ampara</option>
                                <option value="Batticalo">Batticalo</option>
                                <option value="Trincomale">Trincomale</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <button type="submit" name="buy" class="btn btn-primary"> Buy</button>
                        <button type="submit" name="rent" class="btn btn-primary"> Rent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showForm(productId) {
            $('#productId').val(productId);
            $('#orderFormModal').modal('show');
        }

        $('#orderFormModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var productId = button.data('product-id'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('.modal-body #productId').val(productId);
        });
    </script>



    <?php @include 'footer.html'; ?>

</body>

</html>


<!-- Navbar links -->