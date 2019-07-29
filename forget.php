<?php
session_start();

?>
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
   <div class="container-fluid bg">
      <div class="row">
      	<div class="col"></div>
      		<div class="col">
         

              <?php
               $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               if(strpos($fullurl, "forget=incorrectusername")==true){
                 echo"<p class='error'>Incorrect Username</p>";
                 

               }
               elseif(strpos($fullurl, "forget=incorrectemail")==true){
                echo"<p class='error'>Incorrect Email </p>";
                

              }
              
              
          ?>



      			
    <form class="form-container" action="forgetlogic.php" method="POST">
      <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="user" id="exampleInputEmail1" placeholder="Enter Username" required>
    
      </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email" required>
      </div>
      
     <button type="submit" class="btn btn-success btn-block" name="submit">Recover</button>
     
       </form>



      </div>
       <div class="col"></div>



      </div>
   	


   </div>   



</body>
</html>