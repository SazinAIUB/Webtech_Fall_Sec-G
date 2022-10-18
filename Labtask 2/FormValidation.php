<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation</title>
</head>
<body>
	<form>
		<h1 style="text-align: center; color: red;">Form</h1>
		<div> <label> Name 			:  <input type="text" name="name"></label></div><br>
		<div><label>Email			: <input type="email" name="email"></label></div><br>
		<div>Date of Birth	: <input type="date" name="dob"></div><br>
		<div>Gender			:  <input type="radio" name = "gender"> male
						   <input type="radio" name = "gender"> female</div><br>

		<div>degree			:<input type="checkbox" name = 'degree'>SSC
						  <input type="checkbox" name = 'degree'>HSC
						  <input type="checkbox" name = 'degree'> BSc
						  <input type="checkbox"  name = 'degree'>MSc</div><br>
		<div>Blood Group     : <select name="bg">
							<option value="A+">A+</option>
							<option value="B+" >B+</option>
							<option value="AB+">AB+</option>
							</select></div><br>
		<button type="submit">submit</button>

	</form>

Your Data is:<br> <?php echo $_GET['name'];?><br>
				<?php echo $_GET['email']; ?><br>
		<?php echo $_GET['dob']; ?><br>
		<?php echo $_GET['gender']; ?><br>
		<?php echo $_GET['degree']; ?><br>
		<?php echo $_GET['bg']; ?><br>
</body>
</html>