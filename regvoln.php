<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Social Saviour</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <!-----Header-->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
         <a class="navbar-brand" href="index.html"> <img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"   href="index.html">Home</a>
            </li> 
            
            <div class="dropdown">
              <label class="dropbtn">Our Services</label>
              
              <div class="dropdown-content">
                <a href="medical.html">Medical Care</a>
                <a href="skill.html">Skill Development</a>
                <a href="education.html">Educational Help</a>
                <a href="household.html">Monthly Household</a>
                <a href="blooddonation.html">Blood Donation Camps</a>
              </div>
            </div> 
            
          
            <li class="nav-item">
              <a class="nav-link"   href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="bank.html">Bank Details</a>
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



    <!-----Contact us section------->

    <div class="container">
      <div style="text-align:center">
      <?php
               $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               if(strpos($fullurl, "volunteer=registered")==true){
                 echo"<p class='success'>You have been Registered as Volunteer,Thank You..</p>";
                 

               }
               ?>
        <h2>Register As Volunteer</h2>
        <hr class="light">
        <p> Fill in following details:</p>
      </div>
      <div class="row">
        <div class="column">
          <img src="img/regvol.jpg" style="width:100%  ">
        </div>
        <div class="column">
          <form action="regvolunlogic.php" method="POST">
            <label for="fname"> Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name.." required>
            <label for="Ename">Email</label>
            <input type="text" id="lname" name="email" placeholder="Your Email.." required>
            <label for="country">Phone Number</label>
            <input type="text" id="country" name="phoneno" placeholder="Your Phone number.." required> <br>
            <label for="subject">Fill in Query, if any ?</label>
            <textarea id="subject" name="message" placeholder="Message.." style="height:170px"></textarea>
            <input type="submit" value="Submit" name="submit">
          </form>
        </div>
      </div>
    </div> 


<!----Fotter-->


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
          <a href="007danixh/facebook"><i class="fab fa-facebook" class="text-centre"></i></a>
                   <a href="007danixh/facebook"><i class="fab fa-twitter"></i></a>
                    <a href="007danixh/instagram"><i class="fab fa-instagram"></i></a>
                     <a href="007danixh/youtube"><i class="fab fa-youtube"></i></a> 
                      <a href="007danixh/youtube"><i class="fab fa-linkedin"></i></a> 




       </div>
       <div class="col-12">
           <hr class="light">
           
           <h6 class="text-center" class="display-4">Copyright &copy;2019 Social Saviour. All Rights Reserved.</h6>
       </div>
        

    </div>
</footer>

</body>
</html>