<?php include 'header.html'; ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Job Application </title>
</head>
<body>
		<h1>Job Application Form</h1>
 <form action="ApplyJob.php" method="post">

   Name: <input type="text" name="Name" id="Name" placeholder="Enter your name: "> <br><br>
   Address: <input type="text" name="Address" id="Address" placeholder="Address: "><br><br>
   Gender: <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender: "><br><br>
   Email: <input type="email" name="Email" id="Email" placeholder="Enter email address: "><br><br>
   Phone No: <input type="phone" name="Phone_Number" id="Phone_Number" placeholder="Enter Phone Number: "><br><br>
   Phone No: <input type="phone" name="Phone_Number" id="Phone_Number" placeholder="Enter Phone Number: "><br><br>
   Phone No: <input type="phone" name="Phone_Number" id="Phone_Number" placeholder="Enter Phone Number: "><br><br>
   Date of Birth: <input type="date" name="DOB" id="DOB" placeholder="Enter your Birthday: "><br><br>
   Blood Group: <input type="text" name="Blood_Group" id="Blood_Group" placeholder="Enter your Blood Group: "><br><br>
   <input type="submit" name="submit">
   <input type="reset" name="reset" value="Reset">

 </form>
</body>
</html>

<style>
  form,input{
    font: serif;
    font-size: 30px;
  }
  h1{
    text-align: center;
  }
  body{
    background-color: #ff8c66;
  }
</style>