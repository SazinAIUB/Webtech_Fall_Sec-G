<?php
include 'header&footer.php';
$message = $error = "";
if(isset($_POST["login"])){
    if(empty($_POST["name"])){
        $error = "Username Cannot be empty";
    }
    else if(empty($_POST["pass"])){
        $error = "Password Cannot be empty";
    }
    else{
        if(file_exists('data.json')){
            $data = file_get_contents("data.json");
            $data = json_decode($data, true);
            foreach($data as $item){
                if($item["username"]==$_POST["name"] && $item["pass"]==$_POST["pass"]){                    
                    session_start();                    

                    $name =$_POST["name"];

                    $_SESSION['name'] = $name;
                    header("../View/Dashboard.php");                    
                }
                else{
                    $error = "Incorrect username or password";
      
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<head>  
    <title>Login</title>  
  
</head> 
<body>  
<style>
.error {color: red;}
</style>
<div class="container" style="width: 500px; height: 50%;"> 
<br><br>
<form action="" method="post">
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
<fieldset>
    <h1>LOGIN </h1><br><br>
    <label>User Name :</label>
    <input type = "text" name = "name" class="form-control" value="<?php if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];} ?>"><br>
    <label>Password  :</label>
    <input type = "password" name = "pass" class="form-control" value="<?php if(isset($_COOKIE['pass']))
    {echo $_COOKIE['pass'];} ?>"><br><br>
    <input type = "checkbox" name = "remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>>Remember Me<br><br>
    <input type = "submit" name = "login" value = "Login">
    <a href="forgot_password.php">Forgot Password?<br>

    <?php
        if(isset($message)){
            echo $message;
        }

        if (!empty($_POST['remember'])) {
            setcookie("name", $_POST['name'], time()+10);
            setcookie("pass", $_POST['pass'], time()+10);                
        }else{
            setcookie("name", "");
            setcookie("pass", "");
        }
    ?>
</form>
</body>
</html>

<style type="text/css">
    fieldset{
        margin: 0 auto;
    }
    label{
        font-size: 30px;
    }
    input{
        font-size: 30px;
    }
</style>
