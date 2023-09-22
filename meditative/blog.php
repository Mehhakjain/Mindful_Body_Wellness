<?php
session_start();
include_once '../assets/conn/dbconnect.php';
// include_once 'connection/server.php';
if(!isset($_SESSION['username']))
{
header("Location: ../index.html");
}

 $sql = "SELECT * FROM blog where blog_id='1'; ";
    $query = $con->query($sql);
     $sql2 = "SELECT * FROM blog where blog_id='2'; ";
    $query2 = $con->query($sql2);
     $sql3 = "SELECT * FROM blog where blog_id='3'; ";
    $query3 = $con->query($sql3);
     $sql4 = "SELECT * FROM blog where blog_id='4'; ";
    $query4 = $con->query($sql4);
     $sql5 = "SELECT * FROM blog where blog_id='5'; ";
    $query5 = $con->query($sql5);




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Meditative - Free Bootstrap 4 Template by Colorlib</title>
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

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="style1.css">
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
                <li class="nav-item"><a href="blog.php" class="nav-link"><i class="fas fa-blog"></i>Our Blog</a></li>
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
            <h1 class="mb-3 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="row">
	          	<div class="col-md-12 d-flex ftco-animate">
		          	<div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
		              </a>
		              <div class="text pl-md-4 ml-md-2 pt-4">
		              	<div class="meta">
		                  <div><a href="#">Sept. 28, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
                     <?php while($content = mysqli_fetch_assoc($query))
                     {
                      ?>
		                <h3 class="heading mt-2"><a href="#"><?php echo  $content['blog_heading'];?></a></h3>
		                <p><?php echo $content['blog_content'];?>
                    
                    </p>
		                <p><a href="#" class="btn btn-outline-primary">Learn more</a>
                    <?php
                    }
                    ?> </p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		          	<div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
		              </a>
		              <div class="text pl-md-4 ml-md-2 pt-4">
		              	<div class="meta">
		                  <div><a href="#">Sept. 28, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
                    <?php while($content2 = mysqli_fetch_assoc($query2))
                     {
                      ?>
		                <h3 class="heading mt-2"><a href="#"><?php echo  $content2['blog_heading'];?></a></h3>
		                <p><?php echo $content2['blog_content'];?></p>
		                <p><a href="#" class="btn btn-outline-primary">Learn more</a>
                      <?php
                    }
                    ?></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		          	<div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
		              </a>
		              <div class="text pl-md-4 ml-md-2 pt-4">
		              	<div class="meta">
		                  <div><a href="#">Sept. 28, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
                    <?php while($content3 = mysqli_fetch_assoc($query3))
                     {
                      ?>
		                <h3 class="heading mt-2"><a href="#"><?php echo  $content3['blog_heading'];?></a></h3>
		                <p><?php echo $content3['blog_content'];?>
                    <?php
                    }
                    ?>  
                    </p>

		                <p><a href="#" class="btn btn-outline-primary">Learn more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		          	<div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
		              </a>
		              <div class="text pl-md-4 ml-md-2 pt-4">
		              	<div class="meta">
		                  <div><a href="#">Sept. 28, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
                    <?php while($content4 = mysqli_fetch_assoc($query4))
                     {
                      ?>
		                <h3 class="heading mt-2"><a href="#"><?php echo  $content4['blog_heading'];?></a></h3>
		                <p><?php echo  $content4['blog_content'];?></p>
		                <p><a href="#" class="btn btn-outline-primary">Learn more</a>
                      <?php
                    }
                    ?></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		          	<div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
		              </a>
		              <div class="text pl-md-4 ml-md-2 pt-4">
		              	<div class="meta">
		                  <div><a href="#">Sept. 28, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
                    <?php while($content5 = mysqli_fetch_assoc($query4))
                     {
                      ?>
		                <h3 class="heading mt-2"><a href="#"><?php echo  $content5['blog_heading'];?></a></h3>
		                <p><?php echo  $content5['blog_content'];?></p>
		                <p><a href="#" class="btn btn-outline-primary">Learn more</a>
                      <?php
                    }
                    ?>
                  </p>
		              </div>
		            </div>
		          </div>
						</div>
						<div class="row mt-5">
			        <div class="col">
			          <div class="block-27">
			            <ul>
			              <li><a href="#">&lt;</a></li>
			              <li class="active"><span>1</span></li>
			              <li><a href="#">2</a></li>
			              <li><a href="#">3</a></li>
			              <li><a href="#">4</a></li>
			              <li><a href="#">5</a></li>
			              <li><a href="#">&gt;</a></li>
			            </ul>
			          </div>
			        </div>
			      </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
           
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3 class="heading-2">Categories</h3>
                <li><a href="#">Workout <span>(12)</span></a></li>
                <li><a href="#">Gym <span>(22)</span></a></li>
                <li><a href="#">Crossfit <span>(37)</span></a></li>
                <li><a href="#">Body Fit <span>(42)</span></a></li>
                <li><a href="#">Fitness <span>(14)</span></a></li>
                <li><a href="#">Yoga <span>(140)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Looking for your one-stop-shop for all things fitness related</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Healthy living in an urban enviroment comes with its oun set of unique challenges</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Making changes to your eating habts can be challenging</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
   <center> <h2 class="mb-1" >Submit Your Blog</h2></center>
         </div>
        </div>
 
    <div class="w3layouts_main wrap">
        
        
        
      <h3>Enter Content</h3>
        <form action="insertblog.php" method="post" class="agile_form">
          <h2>Blog Heading</h2>
             <ul class="agile_info_select">
              <textarea name="heading"id="heading"cols="60" rows="3" placeholder="Blog Heading" required ></textarea>
                
                      <div class="check w3"></div>
                       <h2>Blog Content</h2>
                     <textarea name="content" id="content" cols="60" rows="10"  placeholder="Blog Content" required></textarea>
                     
                      <div class="check w3"></div>
                       
                     
                      <div class="check w3"></div>
                       <h2>Name</h2>
                     <input type="text" name="name"  id="name" placeholder="Username" required> 
                     
                      <div class="check w3"></div>
             </ul>    
            
                              <br>
            <center><input type="submit" value="Submit" name="Submit" class="agileinfo" /></center>
      </form>     
    </div>
    <div class="agileits_copyright text-center">
            
    </div></div></div>
    

                            </table>
                        </div>
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
         <li><a href="#">Blog</a></li>
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
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
  </body>
</html>