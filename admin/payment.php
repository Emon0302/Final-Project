<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
else
{
    $get = $_GET['o_id'];
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $query = "SELECT * FROM `admin_order` where `o_id`=$get"; 
    
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    
    $d_order = $stmt->fetch();

    //query for username & dealer_id
    // $query1 = "SELECT * FROM `admin_order` where `o_id`=$get"; 

    // $stmt1 = $conn->prepare($query1);
    // $result1 = $stmt1->execute();
    
    // $d_order1= $stmt1->fetch();

    // if(isset($_POST['submit'] ))
    // {
    //     $mql = "UPDATE `admin_order` SET `o_id`=:o_id,`de_id`=:de_id,`package`=:package,`username`=:username,`c_name`=:c_name,`quantity`=:quantity ,`price`=:price ,`shift`=:shift ,`o_hr`=:o_hr ,`c_hr`=:c_hr ,`edate`=:edate ,`type`=:type ,`total`=:total ,`payment`=:payment,`t_id`=:t_id  WHERE `o_id`=$get";
    //     mysqli_query($db, $mql);
    //             $success = 	'<div class="alert alert-success alert-dismissible fade show">
    //                                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //                                                                 <strong>Congrass!</strong> New Category Added Successfully.</br></div>';
        
    //     }
	




?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Dashboard-Online Event Management</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost/project/admin/dashboard.php">
                        <!-- Logo icon -->
                        <h4>Event Management</h4>
                        <!-- <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b> -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span> -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Log</li>

                        <?php
                        if($_SESSION['role'] == "User"){
                            echo'
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_orders.php">All Orders</a></li>
								  
                            </ul>
                        </li>
                            ';
                        }
                        elseif($_SESSION['de_id']){
                        echo'
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Services</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_services.php">All Services</a></li>
                                <li><a href="add_service.php">Add Service</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="admin_order.php">All Orders</a></li>
								  
                            </ul>
                        </li>
                        ';
                        }
                        else{
                            echo'
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Services</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_services.php">All Services</a></li>
								<li><a href="add_category.php">Add Service Category</a></li>
                                <li><a href="add_service.php">Add Service</a></li>
                                <li><a href="all_dealer_service.php">All Dealer Services</a></li>
                                
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Packages</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_packages.php">All Packages</a></li>
								<li><a href="add_packages.php">Add Package</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_orders.php">All Orders</a></li>
                                <li><a href="all_dealer_order.php">All Dealer Orders</a></li>
								  
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Users</a></li>
								<li><a href="add_users.php">Add Users</a></li>
                                <li><a href="allcompanyuser.php">All Company Users</a></li>
                                <li><a href="add_companyuser.php">Add Company User</a></li>
                                <li><a href="all_dealer.php">All Dealer</a></li>
                                <li><a href="add_dealer.php">Add Dealer</a></li>
                                <li><a href="add_dealercat.php">Add Dealer Category</a></li>
								
                               
                            </ul>
                        </li>
                            
                            ';
                        }
                        
                        ?>
                        
                       
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
									<?php  echo $error;
									        echo $success; ?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Payment to Dealer</h4>
                            </div>
                            <div class="card-body">
                                <form action='payment_datastore.php?o_id=<?=$d_order['o_id'];?>' method='post' >
                                    <div class="form-body">
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Dealer Name</label>
                                                    <input type="text" name="username" value="<?=$d_order['username'];?>" class="form-control" placeholder="<?=$d_order['username'];?>"readonly>
                                                    <input type="hidden" class="form-control" id="de_id" name="de_id" value="<?=$d_order['de_id'];?>">
   
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                               
                                            </div>
                                            </div>
                                            <div class="row p-t-20">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <label class="control-label">Package </label>
                                                    <input type="text" name="package" value="<?php echo $d_order['package'];?>"  class="form-control" placeholder="$ <?=$d_order['package'];?>"readonly>
                                                   </div>
                                            </div>
                                            </div>
                                        
                                        <!--/row-->
                                        <div class="row p-t-20">
                                        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Price </label>
                                                    <input type="text" name="price" value="<?php echo $d_order['price'];?>"  class="form-control" placeholder="$ <?=$d_order['price'];?>"readonly>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Quantity</label>
                                                    <input type="text" name="quantity" value="<?php echo $d_order['quantity'];?>"  class="form-control" placeholder="<?=$d_order['price'];?>"readonly>
                                                    </div>
                                            </div>
                                            <?php
                                            $total=$d_order['price']*$d_order['quantity'];
                                            ?>
                                            <div class="col-md-4">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Total</label>
                                                    <input type="text" name="total" value="<?php echo $total;?>"  class="form-control" placeholder="<?=$total;?>"readonly>
                                                    </div>
                                            </div>
                                        </div>
                                        <!--/row-->
										
                                            <!--/span-->
                                          
                                            <!--/span-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Event Date</label>
                                                    <input type="text" name="edate" value="<?=$d_order['edate'];?>" class="form-control" placeholder="<?=$d_order['edate'];?>"readonly>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Event Shift</label>
                                                    <input type="text" name="shift" value="<?php echo $d_order['shift'];?>"  class="form-control" placeholder="<?=$d_order['shift'];?>"readonly>
                                                    </div>
                                            </div>
                                            </div>
                                              <!-- 
                                        
                                        
                                       
                                        
                                       
                                        $_payment=$_POST['payment'];
                                        $_t_id=$_POST['t_id']; -->                              
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Starting Hour</label>
                                                    <input type="text" name="o_hr" value="<?=$d_order['o_hr'];?>" class="form-control" placeholder="<?=$d_order['o_hr'];?>"readonly>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Closing Hour</label>
                                                    <input type="text" name="c_hr" value="<?php echo $d_order['c_hr'];?>"  class="form-control" placeholder="<?=$d_order['c_hr'];?>"readonly>
                                                    </div>
                                            </div>
                                            </div>

                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Event type</label>
                                                    <input type="text" name="type" value="<?=$d_order['type'];?>" class="form-control" placeholder="<?=$d_order['type'];?>"readonly>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                             <div class="form-group has-danger">
                                                    <label class="control-label">Company User</label>
                                                    <select name="c_name" class="form-control " data-placeholder="Choose a Company User" tabindex="1">
                                                    
                                                        <option value="<?=$d_order['c_name'];?>" selected><?=$d_order['c_name'];?></option>
                                                 <?php $ssql ="select * from admin where role='User'";
													$res=mysqli_query($db, $ssql); 
													while($row=mysqli_fetch_array($res))  
													{
                                                       echo' <option value="'.$row['username'].'">'.$row['username'].'</option>';;
													}  
                                                 
													?> 
													 </select>
                                                    </div>
                                            </div>
                                            </div>

                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">payment</label>
                                                    <select class="form-control" name="payment" id="payment"required>
                                                        
                                                        <option value="">Select Your Payment Method</option>
                                                        <!-- <option value="pay on delivery">pay on delivery</option> -->
                                                         <option value="bkash">Bkash</option>
                                                            <option value="nagad">Nagad</option>
                                                            <option value="rocket">Rocket</option>
                                                        </select>                                                  
                                                    </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                             <label class="control-label">Transaction ID:</label>
                                                    <input type="text" name="t_id" value="<?=$d_order['t_id'];?>" class="form-control" placeholder="<?=$d_order['t-id'];?>">
                                                   
                                            </div>
                                            </div>


											
											
											
                                        </div>
                                     
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
			
			
			
		
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>
<?php
}
?>