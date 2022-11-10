<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome To Dashboard</h1>
<style>
    h1 {
        text-align: center;
        color: black;
    }
    body{
        background color: #99d6ff;
    }
    a{
        font: sans-serif;
        color: black;
        font-size: 20px;
        text-decoration: none;
        border: 1px solid black;
        border-radius: 10px;
        padding: 15px;
    }
</style>
<table>
    <tr>
<td><a href="change_password.php">Change Password</a></td>

</tr>
</table>
<?php  
    if(isset($_SESSION['name']))
        {
        echo $_SESSION['name'];
        }
        else
        {
        header("login.php");  
        }
?>
        
</body>
</html>