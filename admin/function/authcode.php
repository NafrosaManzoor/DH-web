<?php
session_start();
include('../config/dbconnect.php');

if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if ($password == $cpassword) {
        // insert user data
        $insert_query = "INSERT INTO user (name, email, password,confirm_password) 
                VALUES (' $name','$email', '$password','$c_password' )";

        $insert_query_run = mysqli_query($conn, $insert_query);

        if ($insert_query_run) {
            $_SESSION['message'] = "Register Successfully";
            header('Location:login.php');
        } else {
            $_SESSION['message'] = "Something went to wrong";
            header('Location:register.php');
        }
    } else {
        $_SESSION['message'] = "Incorrect Password";
        header('Location:register.php');
    }
} else if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM user WHERE email='$email' AND password='$password' ";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['message'] = "Logged In Successfully";
        header('Location : ../index.php');
    } else {
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: ../login.php');
    }
}
