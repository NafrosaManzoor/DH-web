<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Registration</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Admin Registration
        </div>
        <div class="card-body">
          <form action="admin_register_process.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
          
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php


if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
   

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'dream_house';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the 'user' table
    $query = "INSERT INTO admin_logi (username, password) VALUES ('$name', '$password')";

    if (mysqli_query($conn, $query)) {
        // Insert data into the 'user_details' table
        $sql = "INSERT INTO admin_regi ( username,email, password) 
                VALUES ('$name', '$email','$password')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>';
            echo 'alert("Submit successfully!");';
            echo 'window.location.href = "admin_login.php";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("Connection failed!");';
            echo '</script>' . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo '<script>';
        echo 'alert("Connection failed!");';
        echo '</script>' . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
