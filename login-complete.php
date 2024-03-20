<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Log in Complete</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>body {
    cursor: pointer; /* Make the whole body clickable */
  }
  .redirect-link {
            /* Make the link invisible */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0; /* Set opacity to 0 to hide the element */
            z-index: 1000; /* Ensure it's above other content */
        }
</style>
</head>
<body>
<a href="homepage.php" class="redirect-link"></a> 
  
<div class="login-container">
    <div class="gif-container">
        <img src="icons8-login.gif" alt="Login Success GIF">
    </div>
    <div class="registration-complete">
        <h2>Login success</h2>
        <a href="Loginform.php">Logout</a> 
    </div>
</div>
</body>
</html>
