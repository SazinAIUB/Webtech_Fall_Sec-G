<?php include 'header.html'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Provide Prescription</title>
</head>
<body>
	<h1 style="background-color: tomato;">Provide Prescription</h1>
	<form action="" method="post" enctype="multipart/form-data">
	Patient ID: <input type="number"><br><br>
	Patient Name: <input type="text"><br><br>
	Room No: <input type="number"><br><br>
	Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Image" name="submit">
  

</body>
</html>