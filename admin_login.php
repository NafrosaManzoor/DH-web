<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php @include 'template.html'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Admin Login
        </div>
        <div class="card-body">
          <form action="admin_login_process.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button> </npsb></npsb> </npsb>
            <button type="submit" class="btn btn-primary"><a href="admin_register.php">Register</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php @include 'footer.html'; ?>
</body>
</html>

<?php



if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $password = $_POST["password"];

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'dream_house';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM admin_logi WHERE username='$name'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['username'] = $name;

            // Redirect to index page
            header("Location: admin_panel.php");
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
