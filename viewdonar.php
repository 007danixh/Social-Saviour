<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Social Saviour</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <h1 class="viewtablee">List Of All Donars</h1>
<table class="viewtable">
    <tr>
        <th>Name <hr> </th>
        <th>Email<hr> </th>
        <th>Phone Number <hr></th>
        <hr>
    </tr>
    <?php


$servername ="localhost";
$username = "root";
$password ="";
$dbname ="socialsaviour";


$con =mysqli_connect($servername,$username,$password,$dbname);


 

      $sql ="SELECT Name ,Email,Phone_no from regdonar";
      $result= $con->query($sql);
      if($result-> num_rows >0){
               while($row = $result-> fetch_assoc()){
                 echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone_no"]."</td></tr>";
               }
               
               echo "</table>";
      } 
else{
    echo"0 result";
}
$con->close();
      ?>
<hr>
</table>




</body>
</html>