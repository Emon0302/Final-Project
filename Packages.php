<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); // connection to db
error_reporting(0);
session_start();

include_once 'product-action.php'; //including controller

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Online Event Booking-Packages</title>
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
			<?php $ress= mysqli_query($db,"select * from ser_name where rs_id='$_GET[res_id]'");
									     $rows=mysqli_fetch_array($ress);
										  
										  ?>
            <section class="inner-page-hero bg-image" data-image-src="images/event2.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <figure><?php echo '<img src="admin/Res_img/'.$rows['image'].'" alt="service logo">'; ?></figure>
                                </div>
                            </div>
							
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <h6><a href="#"><?php echo $rows['title']; ?></a></h6>
                                    <p><?php echo $rows['address']; ?></p>
         
                                        </li>
                                    </ul>
                                </div>
                            </div>
							
							
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
                <div class="container">
                   
                </div>
            </div>
            <div class="container m-t-30">
                <div class="row">
                  

                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      
                        <!-- end:Widget package -->
                        <div class="package-widget" id="2">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Select Your Desired Package ! <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="collapse in" id="popular2">
                            
                        
                        <?php  // display values and item of packages/dishes
									$stmt = $db->prepare("select * from pack_name where rs_id='$_GET[res_id]'");
									$stmt->execute();
									$products = $stmt->get_result();
									if (!empty($products)) 
									{
									foreach($products as $product)
										{
						
													
													 
													 ?>
                                                     
                                <div class="packages-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
										<form method="post" action='Packages.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                                            <div class="rest-logo pull-left">
                                                <a class="service-logo pull-left" href="#"><?php echo '<img src="admin/Res_img/dishes/'.$product['img'].'" alt="packages logo">'; ?></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="rest-descr">
                                                <h6><a href="#"><?php echo $product['title']; ?></a></h6>
                                                <p> <?php echo $product['slogan']; ?></p>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
										<span class="price pull-left" >৳<?php echo $product['price']; ?></span>
                                        <?php
                                               $stmt2 = $db->prepare("SELECT * FROM ser_name WHERE rs_id='$_GET[res_id]'");
                                                $stmt2->execute();
                                                $data = $stmt2->get_result();
                                               foreach ($data as $row) {
                                                  if($row['title'] != "Music"||$row['title'] != "Chef"){
                                                      ?>
                                                     <input class="b-r-0" type="text" name="quantity"  style="margin-left:30px;" value="1" size="2" />
                                                      <?php
                                                  } if($row['title'] == "Music"||$row['title'] == "Chef"){?>
                                                    <input class="b-r-0" type="hidden" name="quantity"  style="margin-left:30px;" value="1"/>
                                                    <?php
                                                  }
                                               }
                                               ?>
                                       
										  

										  <input type="submit" class="btn theme-btn" style="margin-left:40px;" value="Add to cart" />
										</div>
										</form>
                                    </div>
                                    <!-- end:row -->
                                </div>
                                <!-- end:packages item -->
								
								<?php
									  }
									}
									
								?>
								
								
                              
                            </div>
                            <!-- end:Collapse -->
                        </div>
                        <!-- end:Widget package -->
                       
                    </div>
                    <!-- end:Bar -->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        
                        <div class="widget widget-cart">
                               <div class="widget-heading">
                                   <h3 class="widget-title text-dark">
                                Your Cart
                             </h3>
                                               
                             
                                   <div class="clearfix"></div>
                               </div>
                               <div class="order-row bg-white">
                                   <div class="widget-body">
                                   
                                   
   <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  // fetch items define current into session ID
{
?>									
                                   
                                       <div class="title-row">
                                       <?php echo $item["title"]; ?><a href="Packages.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                                       <i class="fa fa-trash pull-right"></i></a>
                                       </div>
                                       
                                       <div class="form-group row no-gutter">
                                           <div class="col-xs-8">
                                                <input type="text" class="form-control b-r-0" value=<?php echo "৳".$item["price"]; ?> readonly id="exampleSelect1">
                                                  
                                           </div>
                                           <div class="col-xs-4">
                                              <input class="form-control" type="text" readonly value='<?php echo $item["quantity"]; ?>' id="example-number-input"> </div>
                                       
                                     </div>
                                     
   <?php
$item_total += ($item["price"]*$item["quantity"]); // calculating current price into cart
}
?>								  
                                     
                                     
                                     
                                   </div>
                               </div>
                              
                               <!-- end:Order row -->
                            
                               <div class="widget-body">
                                   <div class="price-wrap text-xs-center">
                                       <p>TOTAL</p>
                                       <h3 class="value"><strong><?php echo "৳".$item_total; ?></strong></h3>
                                       <p>Free Shipping</p>
                                       <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn theme-btn btn-lg">Checkout</a>
                                   </div>
                               </div>
                               
                       
                               
                               
                           </div>
                   </div>
                    <!-- end:Right Sidebar -->
                </div>
                <!-- end:row -->
            </div>
            <!-- end:Container -->
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
