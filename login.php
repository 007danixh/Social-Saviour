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
<div class="text-center headd"> <h1><img id="imglogo" src="img/logo.png"> Login Here</h1></div>
</div>

<hr class="hrs">
   <div class="container-fluid bg">
      <div class="row">
      	<div class="col"></div>
      		<div class="col">
          <?php
               $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               if(strpos($fullurl, "login=incorrectuserpassword")==true){
                 echo"<p class='error'>Incorrect Username Password</p>";
                 

               }
               elseif(strpos($fullurl, "login=incorrectuserpassword")==true){
                echo"<p class='error'>Incorrect Username Password</p>";
                

              }
              
              
          ?>



      			
    <form class="form-container" action="loginlogic.php" method="POST">
      <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="user" id="exampleInputEmail1" placeholder="Enter Username" required>
    
      </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Enter Password" required>
      </div>
      <div class="form-group">
         
        
         

        
    <input type="checkbox" class="form-check-input" id="exampleCheck11">
    <label class="form-check-label" for="exampleCheck1" id="example1">Remember me</label>
  </div>
     <button type="submit" class="btn btn-success btn-block" name="submit">Login</button>
     <a href="forget.php" class="btn btn-primary newbtn">Forgot password ?</a>
     <a href="signup.php" class="btn btn-primary newbtn " id="newpad">Signup</a>
       </form>



      </div>
       <div class="col"></div>



      </div>
   	


   </div>   



</body>
</html>