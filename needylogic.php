<?php

if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
   $phone = mysqli_real_escape_string($conn,$_POST['phoneno']);
   $address = mysqli_real_escape_string($conn,$_POST['address']);
   $path = "needyimages/";
    $path = $path . basename( $_FILES['uploadfile']['name']);
   move_uploaded_file($_FILES['uploadfile']['tmp_name'], $path);
   $path1 = "needyimages/";
    $path1 = $path1 . basename( $_FILES['uploadfile2']['name']);
   move_uploaded_file($_FILES['uploadfile2']['tmp_name'], $path1);
   $message = mysqli_real_escape_string($conn,$_POST['message']);

    


                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO needyform (Name,Email,Phone_no,Address,Your_image,Document,Message) VALUES ('$user','$email','$phone','$address','$path','$path1','$message');";
             mysqli_query($conn,$sql);
             {
                header("Location: needyform.php ?application=applicationsent");
                }
                      exit();
               
            
}


    	
else
{
   header("Location:../needyform.php");
   exit();
}
?>
