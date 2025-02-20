<?php


// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dream_house";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data


$productId = $_POST['productId'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$address = $_POST['address'];
$quantity = $_POST['quantity'];
$city = $_POST['city'];
$type = isset($_POST['buy']) ? 'buy' : 'rent';
//$category = $_POST['c_name'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO orders (productId, email, whatsapp, address, quantity, city, type ) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssiss",  $productId, $email, $whatsapp, $address, $quantity, $city, $type);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();


?>