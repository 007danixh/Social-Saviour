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
    <h1 class="viewtablee">List Of All Needy People</h1>
<table class="viewtable">
    <tr>
        <th>Name <hr> </th>
        <th>Email<hr> </th>
        <th>Phone Number <hr></th>
        <th>Address <hr></th>
        <th>Image <hr></th>
        <th>Document<hr></th>
        <hr>
    </tr>
    <?php


$servername ="localhost";
$username = "root";
$password ="";
$dbname ="socialsaviour";


$con =mysqli_connect($servername,$username,$password,$dbname);


 

      $sql ="SELECT Name ,Email,Phone_No,Address,Your_Image,Document from needyform;";
      $result= $con->query($sql);
      if($result-> num_rows >0){
               while($row = $result-> fetch_assoc()){
                 echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone_No"]."</td><td>".$row["Address"]."</td><td> <img src ='".$row["Your_Image"]."'height ='100' width='100'/></td><td><img src='".$row["Document"]."'height='100' width='100'/></td></tr>";
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