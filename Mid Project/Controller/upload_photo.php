<!DOCTYPE html>
<html>
<body>
 <?php 

session_start();

 ?>
<div style="margin-left: 40%; margin-top: 5%;">
<fieldset style="width: 100px">
<legend>PROFILE PICTURE</legend>
<form action="Picture_Upload.php" method="post" enctype="multipart/form-data">
  <img src="pic.png" alt="Profile Picture">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div> 
</body>
</html>