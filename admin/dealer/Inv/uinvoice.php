
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

$get = $_GET['t_id'];



// Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `users_orders` where `t_id`=$get"; 

$stmt = $conn->prepare($query);
$result = $stmt->execute();

$u_order = $stmt->fetch();
$u_order1=$u_order['u_id'];



?>

<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Online Event Management</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="html2pdf.bundle.min.js"></script>
    <script>
			function generatePDF() {
				// Choose the element that our invoice is rendered in.
				const element = document.getElementById('invoice');
				// Choose the element and save the PDF for our user.
				html2pdf().from(element).save();
			}
		</script>
    
	
</head>
<body>
<div class="container">


    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info">Print</button>
        </div>
        <hr>
    </div>
    <?php
    $query1 = "SELECT * FROM `users` where `u_id`=$u_order1"; 

    $stmt1 = $conn->prepare($query1);
    $result1 = $stmt1->execute();
    
    $u_order2 = $stmt1->fetch();
    ?>
	<div id="invoice">
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a href="">
                            <img src="images/logo of invoice (1).jpg"  />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                           <strong> Event Management</strong>
                            </a>
                            <div><i><h6> WE'RE HERE FOR BRING YOUR HAPPIENESS</h6></i></div>
                        </h2>
                        <div>3A HSEH 356 ROAD I SOUTH KHULSHI CHITTAGONG</div>
                        <div>+8801814045500,+88018141427707</div>
                        <div>eventmanagement@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?=$u_order2['username'];?></h2>
                        <div class="address"><?=$u_order2['address'];?></div>
                        <div class="email"><a href="mailto:john@example.com"><?=$u_order2['email'];?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id"><?=$u_order['t_id'];?></h1>
                        <div class="date">Date of Invoice: <?=$u_order['date'];?></div>
                        <div class="date">Due Date: <?=$u_order['edate'];?>
                    </div>
                    </div>
</div>
                <table cellspacing="3" cellpadding="3" >
                    <thead>
                        <tr>
                            <th class="text-left">Item_name</th>
                            <th class="text-left">Event_Shift</th>
                            <th class="text-right">Starting_Hours</th>
                            <th class="text-left">Closing_Hours</th>
                            <th class="text-right">Event_Date</th>
                            <th class="text-left">Event_type</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-left">Price</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
						// displaying current session user login orders 
						$query_res= mysqli_query($db,"select * from users_orders where t_id='".$_GET['t_id']."'");
                        
                        
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="9"><center>You have No orders Placed yet. </center></td>';
														}
													else
														{			      
										  
										  while($row=mysqli_fetch_array($query_res))
										  {
						
							?>
                        <tr>
                           
                            <td class="text-left"><h3>
                            <?=$row['title'];?>
                                </h3>
                              
                            </td>
                            <td class="qty"><?=$row['shift'];?></td>
                            <td class="unit"><?=$row['o_hr'];?></td>
                            <td class="qty"><?=$row['c_hr'];?></td>
                            <td class="unit"><?=$row['edate'];?></td>
                            <td class="qty"><?=$row['type'];?></td>
                            <td class="unit"><?=$row['quantity'];?></td>
                            <td class="total">$<?=$row['price'];?></td>
                        </tr>
                        <?php
                        }}?>
                    </tbody>
                    <?php
// $item_total=0;
//  $item_total += ($u_order['quantity']*$u_order['price']); // calculating current price into cart

// $totalWidth= $item_total;
// $percentage=25;
// $new_width = ($percentage / 100) * $totalWidth;
// $grand_total=($item_total+$new_width);
?>	
                    <tfoot class= >
                        <tr>
                        
                            <td colspan="7">TOTAL</td>
                            <td><?=$u_order['item_total'];?></td>
                        </tr>
                        <!-- <tr>
                        
                            <td colspan="7">TAX 25%</td>
                            <td><?=$new_width;?></td>
                        </tr>
                        <tr>
                        
                            <td colspan="7">GRAND TOTAL</td>
                            <td><?=$grand_total;?></td>
                        </tr> -->
                    </tfoot>
                </table>
                <div class="notices">
                    <div>Payment-Method:</div>
                    <div class="notice"><?=$u_order['payment'];?></div>
                </div>
                <?php
                    echo'<br>';
                    ?>
                <div class="notices">
                    <div>Trasaction-ID:</div>
                    <div class="notice"><?=$u_order['t_id'];?></div>
                </div>
                    <?php
                    echo'<hr>';
                    ?>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js'></script>
<script src="style.js"></script>
<script src="js/jsPDF/dist/jspdf.min.js"></script>
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

</body>
</html>