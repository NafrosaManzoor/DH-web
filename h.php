<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .card {
    margin-bottom: 20px;
}

.modal-body {
    max-height: calc(100vh - 200px);
    overflow-y: auto;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php include 'fetch_products.php'; ?>
        </div>
    </div>

    <!-- Order Modal -->
    <?php include 'order_modal.php'; ?>

    <!-- Rent Modal -->
    <?php include 'rent_modal.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
