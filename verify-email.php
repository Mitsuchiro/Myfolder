<?php
session_start();
include('db_conn.php');

if(isset($_GET['token']))
{
  $token = $_GET['token'];
  $verify_query = "SELECT verify_token, verify_status FROM user WHERE verify_token= '$token' LIMIT 1";
  $verify_query_run = mysqli_query($conn, $verify_query);

  if(mysqli_num_rows($verify_query_run) > 0)
  {
    $row = mysqli_fetch_array($verify_query_run);
    if($row['verify_status'] == "0")
    {
      $clicked_token = $row['verify_token'];
      $update_query = "UPDATE user SET verify_status ='1' WHERE verify_token='$clicked_token' LIMIT 1 ";      
      $update_query_run = mysqli_query($conn, $update_query);

      if($update_query_run) 
{
    $_SESSION['error'] = "Your Account has been Verified Successfully!";
    header("Location: verified.php?status=success");
    exit(0);
} else {
    $_SESSION['error'] = "Verification Failed: ";
    header("Location: Loginform.php?status=failure");
    exit(0);
}

    }else{
      $_SESSION['error'] = "Email Already Verified. Please Login";
      header("Location: Loginform.php?status=existed");
      exit(0);
    }
  }else{
    $_SESSION['error'] = "This token does not Exist";
    header("Location: Loginform.php");
    exit(0);
  }
}
else
{
  $_SESSION['error'] = "Not Allowed";
  header("Location: Loginform.php");
}
?>