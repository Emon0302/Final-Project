<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
           <!--header starts-->
           <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> Event Management </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="Services.php">Services<span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">LogIn</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">SignUp</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/event2.jpg">
                <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2 style = "color:white">Select Your Desired Event</h2>
                    <p style = "color:white" class="lead">The easiest way to search Event</p>
                </div>
            
                
                    
            
            </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2">

                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-9">
                        <div class="bg-gray restaurant-entry">
                            <div class="row">
                                <?php $ress = mysqli_query($db, "select * from ser_name");
                                while ($rows = mysqli_fetch_array($ress)) {


                                    echo ' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="Packages.php?res_id=' . $rows['rs_id'] . '" > <img src="admin/Res_img/' . $rows['image'] . '" alt="Food logo"></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5><a href="Packages.php?res_id=' . $rows['rs_id'] . '" >' . $rows['title'] . '</a></h5> <span>' . $rows['address'] . ' <a href="#">...</a></span>
															
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																		
                                                                      <a href="Packages.php?res_id=' . $rows['rs_id'] . '" class="btn theme-btn-dash">View More</a> 
                                                                    </div>
																</div>
																<!-- end:right info -->
															</div>';
                                }


                                ?>

                            </div>
                            <!--end:row -->
                        </div>



                    </div>



                </div>
            </div>
    </div>
    </section>
           
            <!-- start: FOOTER -->
            <footer class="footer">
            <div class="container">

                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 address color-gray">
                        </div>
                        <div class="col-xs-12 col-sm-3 address color-gray">
                            <h5>Phone:</h5>
                            <p>+880 1638-575578 | +880 1814-648800 | +880 1828-378707</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 additional-info color-gray">
                            <h5>Address</h5>
                            <p>K.B Aman Ali Road, Chawkbazar, Chattogram</p>
                        </div>
                       
                        
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
            <!-- end:Footer -->
        </div>
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>