
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index1.php');
    exit;
}
?>
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

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
   <a class="navbar-brand" href="index1.php"> <img src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	<span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			  <a class="nav-link"   href="index1.php">Home</a>
			</li> 
			
			
		
      <li class="nav-item">
        <a class="nav-link"   href="index.html">Logout</a>
			</li>
			
		
			<li class="nav-item">
				
				<a href="needyform.php" class="btn btn-primary secondd ">NEED HELP ?</a>
			</li>
			<div class="dropdown">
				<a href="" class="btn btn-primary secondd btnsec ">REGISTER </a>
				<i class="fa fa-caret-down"></i>
				<div class="dropdown-content">
					<a href="regdonar.php">Register as Donar</a>
					<a href="regvoln.php">Register as  Volunteer</a>
					<a href="regblooddonar.php">Register as  Blood Donar</a>
				</div>
			</div> 
		
		</ul>
	</div>
</div>
</nav>

<!--- Image Slider -->

<div id="slides" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
	  <li data-target="#slides" data-slides-to="0" class="active"></li>
	  <li data-target="#slides" data-slides-to="1"></li>
	  <li data-target="#slides" data-slides-to="2"></li>
	 
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
  	  <img src="img/back1.jpg">
  	  <div class="carousel-caption">
  	  	   <h1 class="display-2">Social Saviour</h1>
  	  	   <h3>Save Life Save Mankind</h3>
  	  	   <button type="button" class="btn btn-outline-light btn-lg">View More</button>
  	  	   <button type="button" class="btn btn-primary btn-lg"><a href="https://www.payumoney.com/paybypayumoney/#/92FA1E722F3EE8D249B0AE6270BE5D3C" class="btn btn-primary">Donate Now </button></a>
  	  </div>
   </div>
	  <div class="carousel-item">
  	    <img src="img/back2.jpg">
  	    <div class="carousel-caption">
  	  	   <h3 class="display-2">Support To Accommodate Empowerment.</h3>
  	  	   <h4>To donate toward our Orphan Sponsorship Programme that changes the lives of most deprived communities in the Kashmir. </h4>
  	  	  
  	  	   <a href="https://www.payumoney.com/paybypayumoney/#/92FA1E722F3EE8D249B0AE6270BE5D3C" class="btn btn-primary">Donate Now</a>
  	  </div>

  </div>
  <div class="carousel-item">
  	  <img src="img/back3.jpg">
  	  <div class="carousel-caption">
  	  	   <h1 class="display-2">Become Blood Donar</h1>
  	  	   <h3>“There is no great joy than saving a soul.”</h3>
  	  	  
  	  	   <a href="regblooddonar.php" class="btn btn-primary">Register Now</a>
  	  </div>
  	 
    </div>
 </div>
    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>



<!--- Jumbotron -->

<!--- Welcome Section -->


<!--- Three Column Section -->

 
 
 

<!--- Two Column Section -->




<!--- Fixed background -->



<!--- Emo Section -->

  
<!--- Meet the team -->
<div class="container-fluid padding ">
<div class="row welcome text-center servicess">
     <div class="col-12">
        
       <h1 class="text-center" class="display-4"> View All Details</h1>
     	
     </div>

      <hr>
	
</div>
	
</div>

<!--- Cards -->
<div class="container-fluid padding">
<div class="row padding">
<div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/needy.jpg">
          <div class="card-body">
              <h4 class="card-title">Needy People</h4>
          	   
          	   <a href="viewneedy.php" class="btn btn-outline-secondary">View All Needy Peoples</a>
          </div>
       	
       </div>
   	
   </div>
   <div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/vol.jpg">
          <div class="card-body">
              <h4 class="card-title">Our Volunteers</h4>
          	   
          	   <a href="viewvolun.php"  class="btn btn-outline-secondary">View All Volunteers</a>
          </div>
       	
       </div>
   	
   </div>
   <div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/blooddo.jpg">
          <div class="card-body">
              <h4 class="card-title">Our Blood Donars</h4>
          	   
          	   <a href="viewblood.php" class="btn btn-outline-secondary">View All Blood Donars</a>
          </div>
       	
       </div>
   	
   </div>
	<div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/donar.jpg">
          <div class="card-body">
              <h4 class="card-title">Our Donars</h4>
          	   
          	   <a href="viewdonar.php" class="btn btn-outline-secondary">View All Donars</a>
          </div>
       	
       </div>
   	
   </div>
  
   <div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/awareness.jpg">
          <div class="card-body">
              <h4 class="card-title"> Disease Awareness</h4>
          	   
          	   <a href="https://drive.google.com/open?id=1-rnk1gAZTsZqEtgE9TFmmzpmsOlTJXps" class="btn btn-outline-secondary">View Now</a>
          </div>
       	
       </div>
   	
   </div>
	<div class="col-md-4">
       <div class="card">
          <img class="card-img-top" src="img/help.jpg">
          <div class="card-body">
              <h4 class="card-title">Needy People Who Got Helped</h4>
          	   
          	   <a href="https://drive.google.com/open?id=1gi_8DXYlctBnEZCWHzVtFKBSD2U7mtWL" class="btn btn-outline-secondary">View Now</a>
          </div>
       	
       </div>
   	
   </div>
</div>

	
</div>

<!----Urgent required section----->


	
	<!--- Cards -->
	



<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->
<footer>
	<div class="container-fluid padding">
	   <div class="row text-center">
	     <div class="col-md-4">
       
				<a href="index.html"> <img src="img/logo2.png"></a>
	       <hr class="light">
	   <p> <i class="fas fa-phone"></i> +917006026629</p>
	       <p><i class="fas fa-envelope"></i>  007danixh@gmail.com</p>
	       <p> <i class="fas fa-map-marker-alt"></i>      Karanagar,Srinagar</p>
	       <p><i class="fas fa-street-view"></i>          190004,Kashmir,Srinagar</p>
	     	
	     </div>
	   <div class="col-md-4">
	      <hr class="light">
	      <h3>Our Services</h3>
	       <hr class="light">
	      <a href="medical.html">Medical care</a><br>
         <a href="skill.html">Skill Development</a><br>
         <a href="education.html">Education help</a><br>
         <a href="household.html">Monthly Household</a><br>
         <a href="blooddonation.html">Blood Donation Camps</a><br>





	   </div>

	   <div class="col-md-4">
	      <hr class="light">
	      <h3> Follow Us </h3>
	       <hr class="light">
	      <a href="https://www.facebook.com/007danixh"><i class="fab fa-facebook" class="text-centre"></i></a>
	     	 	 <a href="https://www.facebook.com/007danixh"><i class="fab fa-twitter"></i></a>
	     	 	  <a href="https://www.instagram.com/007danixh"><i class="fab fa-instagram"></i></a>
	     	 	   <a href="https://www.youtube.com/007danixh"><i class="fab fa-youtube"></i></a> 
	     	 	    <a href="https://www.linkedin.com/007danixh"><i class="fab fa-linkedin"></i></a> 




	   </div>
	   <div class="col-12">
	   	<hr class="light">
	   	
			 <h6 class="text-center" class="display-4">Copyright &copy;2019 Socail Saviour. All Rights Reserved.</h6>
	   </div>
		

	</div>
</footer>





</body>
</html>











