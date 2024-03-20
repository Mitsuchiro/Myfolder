<?php
// Database server name and port 
$sname="localhost: 3307"; 
// Database username
$uname="root";
// Database password. nopassword 
$password = "";
// Database name. previously IPT101_db 
$db_name = "ipt101";
//Connection ot the database
$conn = mysqli_connect($sname, $uname, $password, $db_name);
//Check if connection failed then show error message if failed 
if (!$conn) {
echo "Connection failed!";
}
