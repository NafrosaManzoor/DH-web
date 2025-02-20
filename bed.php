<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php @include 'template.html'; ?>

    <!-- Product Cards -->
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <?php
            $products = [

                ["id" => 4, "name" => "Flatform Bed", "image" => "./image/b3.jpg", "price" => 900.50, "description" => "Let's Choose"],
                ["id" => 4, "name" => "Floating Bed", "image" => "./image/b4.jpg", "price" => 900.50, "description" => "Let's Choose"],
                ["id" => 4, "name" => "Divan", "image" => "./image/b6.jpg", "price" => 900.50, "description" => "Let's Choose"],
                ["id" => 1, "name" => "Futon", "image" => "./image/b1.jpg", "price" => 300.20, "description" => "Let's Choose"],
                ["id" => 4, "name" => "Stylish Bed", "image" => "./image/b5.jpg", "price" => 900.50, "description" => "Let's Choose"],
                ["id" => 4, "name" => "Outoman Automatic Bed", "image" => "./image/b7.jpeg", "price" => 900.50, "description" => "Let's Choose"],
                
            ];

            foreach ($products as $product) {
            ?>
                <div class="col-md-3 py-3 py-md-5">
                    <div class="card" id="tpc">
                        <img class="card-img-top" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?php echo $product['name']; ?></h3>
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
                    <form id="orderForm" onsubmit="sendMessage(event)">
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
                        <button type="submit" name="buy" class="btn btn-primary">Buy</button>
                        <button type="submit" name="rent" class="btn btn-primary">Rent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(productId) {
            $('#productId').val(productId);
            $('#orderFormModal').modal('show');
        }

        function sendMessage(event) {
            event.preventDefault();

            var productId = $('#productId').val();
            var email = $('#email').val();
            var whatsapp = $('#whatsapp').val();
            var address = $('#address').val();
            var quantity = $('#quantity').val();
            var city = $('#city').val();
            var type = event.submitter.name; // 'buy' or 'rent'

            var message = `Order Details:
            Product ID: ${productId}
            Email: ${email}
            WhatsApp: ${whatsapp}
            Address: ${address}
            Quantity: ${quantity}
            City: ${city}
            Type: ${type}`;

            var whatsappNumber = '+94752136786'; // Replace with your WhatsApp number
            var whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        }
    </script>

    <?php @include 'footer.html'; ?>
</body>

</html>