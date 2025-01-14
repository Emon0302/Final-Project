<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price,shift,o_hr,c_hr,edate,type,payment,t_id,item_total) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."','".$_POST["shift"]."','".$_POST['o_hr']."','".$_POST['c_hr']."','".$_POST['edate']."','".$_POST['type']."','".$_POST['payment']."','".$_POST['t_id']."','".$_POST['item_total']."')";
						
														mysqli_query($db,$SQL);
														
														$success = "<div class=\"mt-2\">Thank you! Your Order Placed successfully.</div>";

														
														
													}
												}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Online Event Booking-Checkout</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
    
    <div class="site-wrapper">
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
        
			
                <div class="container">
                <div class="title text-xs-center m-b-30">
					  <h4> <span style="color:green;">
								<?php echo $success; ?>
										</span>
                      </h4>
					
                </div>
                </div>
            
			
			
				  
            <div class="container m-t-30">
			<form action="" method="post">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                          
												 
											   
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo "৳".$item_total; ?>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td>free shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "৳".$item_total; ?></strong>
                                                        <input type="hidden" class="form-control" id="item_total" name="item_total" value="<?=$item_total;?>"readonly>
                                                    </td>
                                                    </tr>
                                                </tbody>
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <!-- <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                   
                                            </li>
                                        
                                        </ul> -->
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Event Shift</strong></label>
                                                    <select class="form-control" name="shift" id="shift"required>
                                                    <option value="">--Select Your Event Shift--</option>
                                                        <option value="Morning">Morning</option>
                                                        <option value="Evening">Evening</option>
                                                        <option value="Night">Night</option>
                                                    </select>
                                                
                                                   </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Open Hours</strong></label>
                                                    <select name="o_hr" class="form-control custom-select" data-placeholder="Choose a Category"required>
                                                     <option value="">--Select your Hours--</option>
                                                        <option value="6am">6am</option>
                                                        <option value="7am">7am</option> 
														<option value="8am">8am</option>
														<option value="9am">9am</option>
														<option value="10am">10am</option>
														<option value="11am">11am</option>
                                                        <option value="12am">12pm</option>
                                                        <option value="1pm">1pm</option>
                                                        <option value="2pm">2pm</option>
                                                        <option value="3pm">3pm</option>
                                                        <option value="4pm">4pm</option> 
														<option value="5pm">5pm</option>
														<option value="6pm">6pm</option>
														<option value="7pm">7pm</option>
														<option value="8pm">8pm</option>
                                                        <option value="9pm">9pm</option>
                                                        <option value="10pm">10pm</option>
                                                        <option value="11pm">11pm</option>
                                                        <option value="12pm">12pm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Close Hours</strong></label>
                                                    <select name="c_hr" class="form-control custom-select" data-placeholder="Choose a Category"required>
                                                     <option value="">--Select your Hours--</option>
                                                     <option value="6am">6am</option>
                                                        <option value="7am">7am</option> 
														<option value="8am">8am</option>
														<option value="9am">9am</option>
														<option value="10am">10am</option>
														<option value="11am">11am</option>
                                                        <option value="12am">12pm</option>
                                                        <option value="1pm">1pm</option>
                                                        <option value="2pm">2pm</option>
                                                        <option value="3pm">3pm</option>
                                                        <option value="4pm">4pm</option> 
														<option value="5pm">5pm</option>
														<option value="6pm">6pm</option>
														<option value="7pm">7pm</option>
														<option value="8pm">8pm</option>
                                                        <option value="9pm">9pm</option>
                                                        <option value="10pm">10pm</option>
                                                        <option value="11pm">11pm</option>
                                                        <option value="12pm">12pm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <label for=""><strong>Select your Event Date</strong></label>
                                                    <input type="date" name="edate" class="form-control"required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Event Type</strong></label>
                                                    <select class="form-control" name="type" id="type"required>
                                                    <option value="">--Select Your Event Type</option>
                                                        <option value="Wedding">Wedding</option>
                                                        <option value="Birthday">Birthday</option>
                                                        <option value="Party">Party</option>
                                                    </select>
                                                
                                                   </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Paymeny Method</strong></label>
                                                    <select class="form-control" name="payment" id="type"required>
                                                    <option value="">--Select Your Payment Method--</option>
                                                        <option value="bKash">bkash</option>
                                                        <option value="Nagad">Nagad</option>
                                                        <option value="Rocket">Rocket</option>
                                                    </select>
                                                
                                                   </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Transaction Id</strong></label>
                                                    <input type="text" name="t_id" class="form-control"value=""placeholder="transanction id"required>
                                                
                                                   </div>
                                            </div>
                                            
                                        <p class="text-xs-center"> <input type="submit" onclick="return confirm('Are you sure?');" name="submit"  class="btn btn-outline-success btn-block" value="Order now"> </p>
                                    </div>
									</form>
                                </div>
                            </div>
                       
                    </div>
                </div>
				 </form>
            </div>
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
                        <!-- <div class="col-xs-12 col-sm-4 additional-info color-gray">
                            <p>@copyright 2022</p>
                        </div> -->
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
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

<?php
}
?>
