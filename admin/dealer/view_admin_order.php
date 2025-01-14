<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["de_id"]))
{
	header('location:index.php');
}
else
{

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
                    <a class="navbar-brand" href="admin_order.php">
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
                        <!-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li> -->
                        <!-- <li class="nav-label">Log</li> -->

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
                <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Admin Orders</h4>
                             
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-bordered table-striped">
                                       
                                        <tbody>
                                           <?php
											$sql="SELECT dealer.*, admin_order.* FROM dealer INNER JOIN admin_order ON dealer.de_id=admin_order.de_id where o_id='".$_GET['user_upd']."'";
												$query=mysqli_query($db,$sql);
												$rows=mysqli_fetch_array($query);
												
												
																		
												?>
											
											<!-- <tr>
													<td><strong>username:</strong></td>
												     <td><center><?php echo $rows['username']; ?></center></td>
													  <td><center>
													   <a href="javascript:void(0);" onClick="popUpWindow('order_update.php?form_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update order">
															 <button type="button" class="btn btn-primary">Take Action</button></a>
															 </center>
											 </td>
												  
																																					
											</tr>	  -->
											
											<tr>
													<td><strong>Package Details:</strong></td>
												    <td><center><?php echo $rows['package']; ?></center></td>
													  
												   																							
											</tr>
                                            
                                            <tr>
													<td><strong>Company User Name:</strong></td>
												    <td><center><?php echo $rows['c_name']; ?></center></td>
													  
												   																							
											</tr>

                                            <tr>
													<td><strong>Quantity:</strong></td>
												    <td><center><?php echo $rows['quantity']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Price:</strong></td>
												    <td><center>৳<?php echo $rows['price']; ?></center></td>
													   
												   																							
											</tr>
											<tr>
													<td><strong>Event Shift:</strong></td>
												    <td><center><?php echo $rows['shift']; ?></center></td>
													  
												   																							
											</tr>

                                            <tr>
													<td><strong>Event Open Hour:</strong></td>
												    <td><center><?php echo $rows['o_hr']; ?></center></td>
													  
												   																							
											</tr>

                                            <tr>
													<td><strong>Event Close Hour:</strong></td>
												    <td><center><?php echo $rows['c_hr']; ?></center></td>
													  
												   																							
											</tr>

											<tr>
													<td><strong>Event Date:</strong></td>
												     <td><center><?php echo $rows['edate']; ?></center></td>
													  
												   																							
											</tr>

                                            <tr>
													<td><strong>Event Type:</strong></td>
												    <td><center><?php echo $rows['type']; ?></center></td>
													  
												   																							
											</tr>


                                            <tr>
													<td><strong>Payment Method:</strong></td>
												    <?php if ($rows["payment"]==NULL){
                                                            echo '<td><center>No payment yet</center></td>';
                                                            }
                                                            else
                                                            {
                                                                echo '<td><center>'.$rows["payment"].'</center></td>'; 
                                                            }
                                                                ?>
                                                    
													  
												   																							
											</tr>
                                            <tr>
													<td><strong>Transaction Id:</strong></td>
												    
                                                        <?php 
                                                    if ($rows["t_id"]==NULL){
                                                    echo '<td><center>No payment yet</center></td>';
                                                    }
                                                    else
                                                    {
                                                        echo '<td><center>'.$rows["t_id"].'</center></td>'; 
                                                    } ?>
                                                
													  
												   																							
											</tr>

                                            <tr>
													<td><strong>Date:</strong></td>
												    <td><center><?php echo $rows['date']; ?></center></td>
													  
												   																							
											</tr>

											<tr>
													<td><strong>status:</strong></td>
													<?php 
																			$status=$rows['status'];
																			if($status=="" or $status=="NULL")
																			{
																			?>
																			<td> <center><button type="button" class="btn btn-info" style="font-weight:bold;"><span class="fa fa-bars"  aria-hidden="true" >Pending</button></center></td>
																		   <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
																			<td>   <center><button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>Paid & In Process</button></center></td> 
																			<?php
																				}
																			if($status=="completed")
																				{
																			?>
																			<td>  <center><button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true">Completed</button></center></td> 
																			<?php
																				}
																			if($status=="accepted & pay soon")
																				{
																			?>
																			<td> <center><button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true">Accepted & Pay Soon</button></center></td> 
                                                                            <?php 
																			} 
																			?>
																			<?php
																			if($status=="rejected")
																				{
																			?>
																			<td>  <center><button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>rejected</button> </center></td> 
																			<?php 
																			} 
																			?>
													  
												   																							
											</tr>
                                            <tr>
                                                 <td><center>
												
                                                     </center></td> 
													   
                                                 <td><center>
                                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                                Take action
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                                        <button type="button" onclick="javascript:window.location.reload()"class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    
                                                                    <form action='admin_order_update.php?form_id=<?=$rows['o_id'];?>' method="post"> 
 
                                                                                        <table  border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr >
                                                                                            <td><b>form Number</b></td>
                                                                                            <td><?php echo htmlentities($_GET['user_upd']); ?></td>
                                                                                            </tr>
                                                                                        
                                                                                        <tr >
                                                                                            <td><b>Status</b></td>
                                                                                            <td><select name="status" required="required" >
                                                                                            <option value="">Select Status</option>
                                                                                            <option value="in process">Paid & In Process</option>
                                                                                            <option value="completed">Completed</option>
                                                                                            <option value="rejected">rejected</option>
                                                                                                
                                                                                            </select></td>
                                                                                            </tr>
                                                                                           
                                                                                        
                                                                                        
                                                                                        </table>
  
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"onclick="javascript:window.location.reload()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                       
                                                                        <input type="submit" name="update"  class="btn btn-primary" value="Submit">
                                                                    </div>
                                                                    </form>
                                                                    </div>
                                                                </div>
</div>
													 </center></td>
                                            </tr>
											
																				
																															
																						
									
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						 </div>
                      
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

<!-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Services</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_services.php">All Services</a></li>
                                <li><a href="add_service.php">Add Service</a></li>
                                
                            </ul>
                        </li> -->