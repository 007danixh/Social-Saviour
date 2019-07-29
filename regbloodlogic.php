<?php


if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $blood = mysqli_real_escape_string($conn,$_POST['bloodgroup']);
   $phno = mysqli_real_escape_string($conn,$_POST['phoneno']);
   $mess = mysqli_real_escape_string($conn,$_POST['message']);
   

    
   

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO regblood (Name,Email,Blood_group,Phone_No,Message) VALUES ('$user','$email','$blood','$phno','$mess');";
             mysqli_query($conn,$sql);
            {
            header("Location: regblooddonar.php ?blooddonar=registered");
            }
                  exit();
           
}    

else
{
   header("Location: regblooddonar.php");
   exit();
}
?>
