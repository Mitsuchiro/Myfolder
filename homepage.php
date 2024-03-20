<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Home Page</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .content h2 {
            color: #333;
            margin-top: 0;
        }
        .redirect-link {
            display: none;
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?> <!-- Include the navigation bar -->

<a href="home.php" class="redirect-link"></a>

<div class="container">
    <div class="header">
        <h1>WEBSITE NG MGA GWAPOY</h1>
    </div>
    <div class="content">
        <h2>Experience the no tulog Pero Gwapo pa</h2>
        <p>Thank you for visiting our website. We aim to provide you with the best experience possible.</p>
        <p>Explore our services and offerings to discover more about what we have to offer.</p>
    </div>
</div>

</body>
</html>

