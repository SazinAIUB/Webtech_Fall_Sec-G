<?php

$message = $error = "";
if(isset($_POST["submit"])){
    if(empty($_POST["email"])){
        $error = "<label class='text-danger'>Enter email</label>";
    }
    else{
        if(file_exists('data.json')){
            $data = file_get_contents("data.json");
            $data = json_decode($data, true);
            foreach($data as $item){
                if($item["e-mail"]==$_POST["email"]){
                    $password=$item["pass"];
                    $message = "<label class = text-success>Email Found.Your Password is: $password </label>";
                    $error = "";
                    break;
                }
                else
                {
                    $error = "<label class='text-danger'>Email not found</label>";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<head>  
    <title></title>   
</head> 
<body>  
    <br />  
    <div class="container" style="width:500px;"> 
    <br><br>
    <form action="" method="post">
        <?php
            if(isset($error)){
                 echo $error;
            }
        ?>
        <fieldset>
        <legend>FORGOT PASSWORD</legend>
        <label>Enter Email :</label>
        <input type = "email" name = "email" class="form-control"><br>

        <input type = "submit" name = "submit" value = "Submit">
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </form>
</body>
</html>