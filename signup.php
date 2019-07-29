<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Social Saviour</title>
    <link rel="stylesheet" type="text/css" href="signupstyle.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
  <body>
    <div>
      <div class="text-center headd">
        <h1><img id="imglogo" src="img/logo2.png" /> Registration Form</h1>
      </div>
    </div>

    <hr class="hrs" />
    <div class="container-fluid bg">
      <div class="row">
        <div class="col"></div>
        <div class="col">
        <?php
               $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               if(strpos($fullurl, "signup=passwordnotmatch")==true){
                 echo"<p class='error'>Password Does Not Match</p>";
                 

               }
               elseif(strpos($fullurl, "signup=useralreadyexist")==true){
                echo"<p class='error'>User Name Already Exist Try Different.</p>";
                

              }
              
              elseif(strpos($fullurl, "signup=emailalreadyexis")==true){
                echo"<p class='error'>E-mail Already Registered.</p>";
                

              }
              elseif(strpos($fullurl, "signup=userregistered")==true){
                echo"<p class='success'>User Sucessfully Registered.</p>";
                

              }
              
          ?>
          <form class="form-container" action="signuplogic.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">User Name</label>
              <input
                type="text"
                class="form-control"
                name="user1"
                id="exampleInputEmail1"
                placeholder="User name"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="Email"
                class="form-control"
                name="email"
                id="exampleInputEmail1"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                class="form-control"
                name="password1"
                id="exampleInputPassword1"
                placeholder="Enter Password"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input
                type="password"
                class="form-control"
                name="password2"
                id="exampleInputPassword1"
                placeholder="Confirm Password"
                required
              />
            </div>
            <div class="form-group">
             

              <input
                type="submit"
                class="btn btn-success btn-block btnpd"
                name="submit"
                value="Submit"
              />
              
              <p>
                Already a user ?
                <a href="login.php"><b class="log">Log in</b></a>
              </p>
            </div>
          </form>
         
        </div>
        <div class="col"></div>
      </div>
    </div>
  </body>
</html>
