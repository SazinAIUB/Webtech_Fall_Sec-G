<?php  
include 'header&footer.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "Enter Name";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "Enter an e-mail";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "Enter a username";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "Enter a password";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "Confirm password field cannot be empty";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "Gender cannot be empty";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"], 
                     'pass'        =>     $_POST["pass"], 
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "Account registered successfully";
                }  
           }
           else
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>   
      </head>  
      <body>  
           <div class="container">  
                                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                     <fieldset>
                       <h1>REGISTRATION </h1><br><br>
                       <img src="image/reg.png" alt="Sorry image couldn't load"><br><br>
                     <label>Name</label>  
                     <input type="text" name="name"><br><br>  
                     <label>E-mail</label>
                     <input type="email" name = "email"><br><br>
                     <label>User Name</label>
                     <input type="text" name = "un"><br><br>
                     <label>Password</label>
                     <input type="password" name = "pass"><br><br>
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass"><br><br>

                    Gender
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>                     
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br><br>

                    Date of Birth:
                    <input type="date" name="dob"> <br><br>
                     
                    <input type="submit" name="submit" value="Submit">
                    <input type="submit" name="reset" value="Reset">          
                    </fieldset>           
                    <?php  
                    if(isset($message))  
                    {  
                         echo $message;  
                    }  
                    ?>  
               </form>  
          </div>    
     </body>  
</html>

<style>
     .error{
          color: red;
     }
     label{
          font: serif;
          font-size: 30px;
     }
     input{
          font: serif;
          font-size: 30px;
     }
     fieldset{
  border: 1px solid;
  width: 50%;
  font: serif;
  font-size: 25px;
  position: absolute;
  margin-left: 450px;

}
body{
    background-color: turquoise;
}
img{
    margin-left: 350px;
    height: 215px;
    width: 215px;
}

</style>