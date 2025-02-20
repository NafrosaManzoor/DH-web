<?php
$servername = "localhost";
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "dream_house";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $orderId = $_POST['orderId'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (email, phone, orderId, password, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $phone, $orderId, $password, $message);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
