<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="regi.css">
    <!--<style>
        .form-box
{
    
    top: 70px;
    width:380px;
	height:450px;
	position:relative;
	margin:2% auto;
	background:rgba(65, 57, 57, 0.915);
	padding:10px;
    overflow: hidden;
    border-radius: 20px;
}

.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}

.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #0f0e0e;
	outline:none;
	background: transparent;
	
}
.submit-btn
{
	width: 60%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #F3C693;
	border: 0;
	outline: none;
	border-radius: 30px;
}

#register
{
	left:50px;
}

#register input
{
	color:white;
	font-size: 15;
}
span
{
	color:#777;
	font-size:12px;
	bottom:35px;
	position:absolute;
}

.main-content{
    width: 100%;
    height: 100vh;
    background-image: url(./image/background.png);
    background-size: cover;
    background-position: 100%;
}


    </style>-->

    
</head>
<body>
<?php @include 'template.html'; ?>

             <div id='login-form'class='login-page'>
            <div class="form-box">
            <form id='register' class='input-group-register' action="" method="post">
     <input type='text' name="name" class='input-field'placeholder='User Name' required>
     <input type='email'  name="email" class='input-field'placeholder='Email' required>
     <input type='password' name="password" class='input-field'placeholder='Enter Password' required>
     <button type='submit'name="submit" class='submit-btn'>Register</button>
     </form>
     </div>
     <?php @include 'footer.html'; ?>

     
     
</body>
</html>



<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
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
        $sql = "INSERT INTO admin_regi (username, email,password) 
                VALUES ('$name','$email',  '$password')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>';
            echo 'alert("Submit successfully!");';
            echo 'window.location.href = "admin_log.php";';
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

