<?php
session_start();
$con= mysqli_connect("localhost", "root","");
mysqli_select_db($con,"logininfo");
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
{
header("Location: ../home.php");
}
$s="select * from logintable where email= '$email'";
$res=  mysqli_query($con, $s) ;
if ($res) {
  # code...
  
  $userRow=mysqli_fetch_assoc($res);
}
else{
  echo "fail";
}
?>
<?php
$male="";
$female="";
if ($userRow['gender']=='male') {
$male = "checked";
}elseif ($userRow['gender']=='female') {
$female = "checked";
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welness Studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     
     <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

    

       
  </head>
 <body>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <div class="row m-auto">
          <div class="col-12 w-100 text-center">
            <img src="images/mondful3.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
          </div>
          <div class="col-12 w-100 text-center">
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="home.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                <li class="nav-item"><a href="classes.php" class="nav-link"><i class="fas fa-spa"></i>Courses</a></li>
                <li class="nav-item"><a href="audio.php" class="nav-link"><i class="fas fa-music"></i>Relaxing Music</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link"><i class="fas fa-address-book"></i>Charity</a></li>
                <li class="nav item"><a href="#" class="nav-link">
                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="color:orange;"></i> <?php 
            
           echo $_SESSION['username'];?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <i class="fa fa-fw fa-user"></i><a href=profile.php style="color:orange;">Profile </a>
                </li>
                
                <li class="divider"></li>
                <li>
                  <i class="fa fa-fw fa-power-off"></i><a href="logout.php" style="color:orange;">  Log Out  </a>
                </li>
              </ul>
</div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">User Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span></span></p>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <section style="padding-bottom: 50px; padding-top: 50px;">
        <div class="row">
   <div class="row">
            <div class="col-md-3 col-sm-3">
              
              <div class="user-wrapper">
                <img src="user.jpg" class="img-responsive" width="50%" />
                <div class="description">
                  <h4><?php 
                    echo $_SESSION['username']; ?> </h4>
                
            
                  <hr />
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
                </div>
              </div>
            </div>
            
            <div class="col-md-9 col-sm-9  user-wrapper">
              <div class="description">
                <h3> <?php 
                    echo $_SESSION['username']; ?> </h3>
                <hr />
                
                <div class="panel panel-default">
                  <div class="panel-body">
                    
                    
                    <table  id="customers" align="center">
                      <tbody>
                        
                        
                        <tr>
                          <td>Date of Birth</td>
                          <td><?php  echo $userRow['dob'];
                           ?></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td><?php echo  $userRow['gender'] ;?></td>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td><?php echo  $userRow['address']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>Phone</td>
                          <td><?php echo  $userRow['phone'] ;?>
                          </td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><?php echo $_SESSION['email']; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
              
            </div>
          </div>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4   style="text-align:center"class="modal-title" id="myModalLabel" >Upate Profile</h4>
                  </div>
                  <div class="modal-body">
                    <!-- form start -->
                    <form action="update.php" method="post" >
                     
                      <table  id="customers">
                        <tbody>
                          

                        
                          <tr>
                            <td>DOB</td>
                             <td><input type="text" class="form-control" name="dob" value="<?php echo $userRow['dob']; ?>"  /></td> 
                           
                            
                          </tr>
                          <!-- radio button -->
                          <tr>
                            <td>Gender</td>
                            <td>
                              <div class="radio">
                                <label><input type="radio" name="gender" value="male" <?php echo $male; ?>>Male</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="gender" value="female" <?php echo $female; ?>>Female</label>
                              </div>
                            </td>
                          </tr>
                          <!-- radio button end -->
                          
                          <tr>
                            <td>Phone number</td>
                            <td><input type="text" class="form-control" name="phone" value="<?php echo $userRow['phone']; ?>"  /></td>
                          </tr>
                          
                          <tr>
                            <td>Address</td>
                            <td><textarea class="form-control" name="address"  ><?php echo $userRow['address']; ?></textarea></td>
                          </tr>
                          <div style="text-align:center">
                          <tr>
                            <td>
                              <input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
                            </tr>
                          </div>
                          </tbody>
                          
                        </table>
                        
                        
                        
                      </form>
                      <!-- form end -->
                    </div>
                    
                  </div>
                </div>
              </div>
              <br /><br/>
            </div>
            
          </div>
          <!-- ROW END -->
        </section>
      </div>
                                    


     <footer class="ftco-footer ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mindful Body Wellness</h2>
              <p>Mindful awareness is being aware and turned in to what is going on right now, in the present moment.
           Be focussed on mindfulness. That helps you make better choices both physically, psychologically and </p>
              <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Popular Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Yoga</a></li>
                <li><a href="#">Chakra</a></li>
                <li><a href="#">Light</a></li>
                <li><a href="#">Meditation</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Relaxing Music</a></li>
                <li><a href="#">Charity</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"> Mindful Body Wellness, South Ext-II, New Delhi</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">01123665598</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script>    
              
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="clearfix"> </div><br>
     <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html
