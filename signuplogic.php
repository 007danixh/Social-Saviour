<?php

if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['user1']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password1']);
   $pass2 = mysqli_real_escape_string($conn,$_POST['password2']);
    

    //error handler
    //check for empty fields
    if($pass != $pass2)
    {
      header("Location: signup.php ?signup=passwordnotmatch");
      exit();
    }


    if(empty($user)||empty($email)||empty($pass))
    {
    	header("Location: signup.php");
    	   exit();
    }else{
          //check if input character are valid
    	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    		header("Location: signup.php");
           exit();
    	}
    	else{
             $sql ="SELECT * FROM registration WHERE username='$user'";
             $result = mysqli_query($conn,$sql);

             $resultcheck =mysqli_num_rows($result);

             if($resultcheck > 0){
                 
               header("Location: signup.php ?signup=useralreadyexist");
           exit();
             }
             $sql ="SELECT * FROM registration WHERE email='$email'";
             $result = mysqli_query($conn,$sql);

             $resultcheck =mysqli_num_rows($result);

             if($resultcheck > 0){
                 
               header("Location: signup.php ?signup=emailalreadyexist");
           exit();
             }
             else{

             	//hashing the password
                

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO registration (username,email,password) VALUES ('$user','$email','$pass');";
             mysqli_query($conn,$sql);
            
             header("Location: signup.php ?signup=userregistered");

                  exit();
           
             }


    	}

    }

}

else
{
   header("Location:../signup.html");
   exit();
}
?>
