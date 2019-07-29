<?php


if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
   $phno = mysqli_real_escape_string($conn,$_POST['phoneno']);
   $mess = mysqli_real_escape_string($conn,$_POST['message']);
   

    
   

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO contactus (Name,Email,Phone_No,Message) VALUES ('$user','$email','$phno','$mess');";
             mysqli_query($conn,$sql);
            {
            header("Location: contact.php ?contactus=messagesent");
            }
                  exit();
           
}    

else
{
   header("Location: contact.php");
   exit();
}
?>
