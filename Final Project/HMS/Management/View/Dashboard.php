<?php 
session_start();
include("../Model/db.php");

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {
    while($row = $userQuery->fetch_assoc()) {
      $Image=$row["Photo"];
  } 
}


//include("Navigation.php");
?>

<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
        <style>
h3{
        font-size: 20px;
        text-color: #663300;
        text-align: center;
    }
fieldset {

  background: #99ddff;
  border-radius:10px;
}
img{
    margin-left:85%;
    margin-top:-60px;

}
.Name{
    margin-left:85%;
}
.f1{
    margin-top:-60%;
    margin-left:180%;
    width:200%;

}
a{
    text-decoration:none;
}

        </style>
        
    </head>
    <body style="background-color:#99ccff;">
        <center><h1>Welcome to Hospital Management Board</h1>
             <h3>Management Panel</h3>
   
    
   <a href="Profile.php"> <img src="<?php echo $Image;?>" height="200" width="200" style="border-radius: 60%;"></a>
   <h2 class="Name"><?php echo $_SESSION["Name"];?></h2>
    
    </center>

        <table>
            <center>
            <tr>
                <th>
                    <fieldset class="f1">
                    <h3><a href="UpdateProfile.php">Edit Profile Profile</a></h3>

                    <hr>

                    <h3><a href="Notice.php">Post Notice</a></h3>
                    <h3><a href="CheckNotice.php">Check Notice</a></h3>

                    <hr>
                    <h3><a href="Search.php">Search Equipement</a></h3>
                    <h3><a href="BuyEquipement.php">Buy Equipement</a></h3>
                    <h3><a href="HospitalsBill.php">Add Hospital Bill </a></h3>
                    <h3><a href="BillHistory.php">Billing History </a></h3>
                    

                    <hr>
                    <h3><a href="DoctorList.php">Doctor List</a></h3>
                    <h3><a href="PatientList.php">Patient List</a></h3>
                    <hr>
                     <a href="../Controller/Logout.php">Sign Out</a>
                     <hr>
                        
                    </fieldset>
                </th>
            </tr>
            </center>
        </table>
    </body>
</html>