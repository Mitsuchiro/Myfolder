<?php
session_start();
// Include the database connection file db_conn
include 'db_conn.php';

// Function to validate user input
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Checks if form data is submitted
if (isset($_POST['username']) && isset($_POST['password'])) { 
    // Validate the input of the user
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    
    // Check if any field is empty
    if (empty($username)) {
        header("Location: Loginform.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: Loginform.php?error=Password is required");
        exit();
    } else {
        // Query to check if the user exists in the database
        $sql = "SELECT * FROM user WHERE (username='$username' OR Email='$username') AND password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Check if the email is verified
            if ($row['verify_status'] == 0) {
                // Redirect user to a verification page or display a message
                header("Location: Loginform.php?error=Please verify your email first. Check your email for the verification link");
                exit();
            }

            // If username or email and password match, set session variables and redirect
            if (($row['username'] === $username || $row['Email'] === $username) && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                // Redirect to a page after successful login
                header("Location: login-complete.php");
                exit();
            } else {
                // Redirect with an error message if username/email or password is incorrect
                header("Location: Loginform.php?error=Incorrect username/email or password");
                exit();
            }
        } else {
            // Redirect if no user found
            header("Location: Loginform.php?error=Invalid username/email or password");
            exit();
        }
    }
} else {
    // Redirect if form data is not submitted
    header("Location: Loginform.php");
    exit();
}
?>
