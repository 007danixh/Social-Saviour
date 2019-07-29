<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
	<title>Social Saviour</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
</head>
<body>
<div>
<div class="text-center headd"> <h1><img id="imglogo" src="img/logo.png"> Forget Password Form</h1></div>
</div>

<hr class="hrs">
  
         
<div class="adjust">



<?php
session_start();
 
 if(isset($_POST['submit'])){
     include'server1.php';

     $uid = mysqli_real_escape_string($conn, $_POST['user']);
     $email =mysqli_real_escape_string($conn,$_POST['email']);

     //error handlers
     //check if inputs are empty
     

     	$sql ="SELECT * FROM registration WHERE username ='$uid'";
     	$result = mysqli_query($conn,$sql);
     	
     	$resultcheck = mysqli_num_rows($result);
     	if($resultcheck < 1)
     	{
        header("Location: forget.php ?forget=incorrectusername");
     	              exit();

        }
        {
            $sql ="SELECT * FROM registration WHERE email='$email'";
             $result = mysqli_query($conn,$sql);

             $resultcheck =mysqli_num_rows($result);

             if($resultcheck < 1){
                 
               header("Location: forget.php ?forget=incorrectemail");
           exit();


            }

        }
        $sql ="SELECT password  from registration where username='$uid'";
        $result= $conn->query($sql);
        if($result-> num_rows >0){
                 while($row = $result-> fetch_assoc()){
                 
                   echo "<h1>  Your password is = ".$row["password"]."</h1>";
                 }
                 
                
        } 
     
    
   
 }
else{
   	header("Location:forget.php"); 
   }


?>

</div>



</body>
</html>