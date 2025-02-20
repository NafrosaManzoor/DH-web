<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <title>Furniture login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">



</head>

<body>
    <?php @include 'template.html'; ?>

    <div class="form-box">
        <form id='login' class='input-group-login' action="login.php" method="post">
            <input type='text' name="name" class='input-field' placeholder='User Name' required>
            <input type='password' name="password" class='input-field' placeholder='Enter Password' required>

            <button type='submit' name="submit" class='submit-btn'>Login</button> <br> <br>
            <button type='submit' name="submit" class='submit-btn'><a href="register.php" style="color:black;">register</a> </button>



        </form>
    </div>
    <?php @include 'footer.html'; ?>


</body>

</html>


<?php

//session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST["password"];

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'dream_house';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM logi WHERE username='$name'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['username'] = $name;

            // Redirect to index page
            header("Location: index.php");
            exit();
        } else {
            echo '<script>';
            echo 'alert("Invalid password!");';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("User not found!");';
        echo '</script>';
    }

    mysqli_close($conn);
}

?>