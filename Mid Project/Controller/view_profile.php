<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
</style> 
</head>  
<body>
<?php 
include 'header&footer.php';
session_start();

if (isset($_SESSION['name'])){require '=Dashboard.php';}
else
{
  header("Dashboard.php");
} 

$data = file_get_contents("data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["e-mail"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 
<div style="margin-left: 35%; margin-top: 10%;">
<fieldset class="grid-container," style="width: 500px">
<legend>PROFILE</legend>

<div style="float: left">
  <p>Name        :   <?php echo $name ?></p><hr>
  <p>Email        :   <?php echo $email ?></p><hr>
  <p>Gender        :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</div> 

<div style="float: right">
  <img style=" width: 85%" src="pic.png" alt="Profile Picture"> 
  <div style="text-align: center"> <a href="upload_photo.php" >Change</a></div>


</div>

<br><br>
</fieldset>
<a href="logout.php">Logout</a> 


</body>  
</html> 