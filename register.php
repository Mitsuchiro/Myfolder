<?php
session_start();
include "db_conn.php";

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Check if the registration form is submitted
if (isset($_POST['username']) && isset($_POST['password']) 
    && isset($_POST['lastname']) && isset($_POST['firstname'])
    && isset($_POST['middlename']) && isset($_POST['email'])) { 
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //Validate the input of the user if allowed
    $firstname = validate($_POST['firstname']);
    $middlename = validate($_POST['middlename']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $verify_token = md5(rand());
    
    // Check if the email or username already exists in the database
    $check_email_query = "SELECT * FROM user WHERE Email='$email' LIMIT 1";
    $check_username_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";

    $check_email_result = mysqli_query($conn, $check_email_query);
    $check_username_result = mysqli_query($conn, $check_username_query);

    if (mysqli_num_rows($check_email_result) > 0) {
        header("Location: registration.php?error=Email already exists. Please use a different email.");
        exit();
    } elseif (mysqli_num_rows($check_username_result) > 0) {
        header("Location: registration.php?error=Username already exists. Please choose a different username.");
        exit();
    }
    // Insert new user data into the database
    $sql = "INSERT INTO user (username, password, Lastname, First_name, Middle_name, Email, verify_token) 
            VALUES ('$username', '$password', '$lastname', '$firstname', '$middlename', '$email', '$verify_token')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        sendemail_verify("$username", "$email", "$verify_token");
        header("Location: Loginform.php?error=Registration Successful! Please verify your email to login.");
        exit();
    } else {
        $_SESSION['error'] = "Registration Failed. Please try again.";
        header("Location: registration.php");
        exit();
    }
}
?>
