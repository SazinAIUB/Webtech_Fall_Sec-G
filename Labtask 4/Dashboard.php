<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php 
include 'home.php';
if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
   }
else
 {
    header("Welcome to Dashboard");  
 }
 ?>
</body>
</html>