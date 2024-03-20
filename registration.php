<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include 'includes/header.php';
    include 'includes/navbar.php'; ?> <!-- Include the navigation bar -->
    <link rel="stylesheet" href="stylesheet.css">
    <!--ensures that web pages are displayed properly on 
    different devices and screen sizes-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container">
    <div class="title">Registration</div>
    <div class="content">
    <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p> <?php } ?>
        <form action="mail.php" method="post">
            <div class="user-details">
                 <!-- Input boxes. name"" connected to index.php line 17 to 25-->
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" name="firstname" pattern="[a-zA-Z\s]+" title="Only letters allowed" placeholder="First Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Middle Name</span>
                    <input type="text" name="middlename" pattern="[a-zA-Z\s]+" title="Only letters allowed" placeholder="Middle Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" name="lastname" pattern="[a-zA-Z\s]+" title="Only letters allowed" placeholder="Last Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                 <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>               
                <div class="form-group">
                    <select type="text" class="form-control" name="Status" required>
                    <option value="" disabled selected>Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="register_btn" value="Register"  class="register-btn">
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php';?>
</body>
</html>
