<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Sign up</title>

<link rel="stylesheet" href="stylesheet.css">
<?php include 'includes/footer.php';?>
<?php include 'includes/navbar.php'; ?> <!-- Include the navigation bar -->
<link rel="stylesheet" href="stylesheet.css">
<!-- Ensures that web pages are displayed properly on different devices and screen sizes -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Sign up</div>
    <div class="content">
        <form action="register.php" method="post">
        <?php if (isset($_GET['success'])) { ?>
			<p class="success"><?php echo $_GET['success']; ?></p> <?php } ?>
            <div class="user-details">
                <!-- Input boxes -->
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="full_name" placeholder="Enter your full name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Sign up" class="register-btn">
            </div>
        </form>
    </div>
</div>
<?php include 'includes/header.php';?>
</body>
</html>
