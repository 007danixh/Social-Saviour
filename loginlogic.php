<?php
session_start();
 
 if(isset($_POST['submit'])){
     include'server1.php';

     $uid = mysqli_real_escape_string($conn, $_POST['user']);
     $pwd =mysqli_real_escape_string($conn,$_POST['pwd']);

     //error handlers
     //check if inputs are empty
     if(empty($uid)||empty($pwd)){

     }else{

     	$sql ="SELECT * FROM registration WHERE username ='$uid'";
     	$result = mysqli_query($conn,$sql);
     	
     	$resultcheck = mysqli_num_rows($result);
     	if($resultcheck < 1)
     	{
        header("Location: login.php ?login=incorrectuserpassword");
     	              exit();

        }
        else{
            if($row =mysqli_fetch_assoc($result)){
              //De-hasshing the password

            	
            	if($pwd ==false){

                header("Location: login.php ?login=incorrectuserpassword");
                     exit();
            	}
            	elseif($pwd==true){

            		//loggin in user

                      $_SESSION['uid']= $row['username'];
                     echo("<script>window.location = 'index1.php';</script>");
            	}


            }

        }
     }
    
   
 }
else{
   	header("Location:login.html"); 
   }


?>