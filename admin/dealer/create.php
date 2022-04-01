<?php

include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
elseif($_SESSION['role'] == "User")
{
	header('location:index.php');
}
else{
$get = $_GET['de_id'];
// $get1 =$_GET['dc_name'];
// echo $get1;
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `admin_order` where `de_id`=$get"; 

$stmt = $conn->prepare($query);
$result = $stmt->execute();

$d_order = $stmt->fetch();
// print_r($page);
// var_dump($banner);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <section>
        <div class="container">
            <div class="row justify-content-center">  
                <div class="col-sm-8">
                    <h1 class="text-center">Add Dealer Order</h1>
                    <form method="post" action="store.php?de_id=<?=$d_order['de_id'];?>">
                    <div class="mb-2 row">  
                    <div class="form-group ">           
                        <label for="name" class="col-sm-2 col-form-label fw-bold">Dealer Name :</label>
                        
                          <?php
                            $query1 = "SELECT * FROM `dealer` where `de_id`=$get"; 

                            $stmt1 = $conn->prepare($query1);
                            $result1 = $stmt1->execute();
                            
                            $d_order1= $stmt1->fetch();?>
                         <input type="text" class="form-control" id="username" name="username" value="<?=$d_order1['username'];?>"readonly>
                         <input type="hidden" class="form-control" id="de_id" name="de_id" value="<?=$d_order1['de_id'];?>"readonly>
                         
                         
                    </div>
                    </div>
                    <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Select Company User</label>
													<select name="c_name" class="form-control custom-select" data-placeholder="Choose a Company User" tabindex="1">
                                                        <option>--Select Company User--</option>
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
                    <div class="mb-2 row">   
                    <div class="form-group">                  
                        <label for="quantity" class="col-sm-2 col-form-label fw-bold">Package :</label>
                        
                         <input type="text" min="0" class="form-control" id="package_detail" name="package_detail" value="">
                         </div>
                    
                    </div>
                    <?php
                    if ($d_order1['dc_name']!= "Music"){
                      echo'  <div class="mb-2 row">   
                        <div class="form-group">                  
                            <label for="quantity" class="col-sm-2 col-form-label fw-bold">Quantity :</label>
                            
                             <input type="number" min="0" class="form-control" id="quantity" name="quantity" value="">
                             </div>
                        
                        </div>';
                }else{
                    echo'<input type="hidden" min="0" class="form-control" id="quantity" name="quantity" value="1">';
                }

                   
                   
                    
                    ?>
                    <div class="mb-2 row">  
                    <div class="form-group">                   
                        <label for="price" class="col-sm-2 col-form-label fw-bold">price :</label>
                        
                         <input type="number" min="0" class="form-control" id="price" name="price" value="">
                         
                    </div>
                  </div>
                         <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Event Shift</strong></label>
                                                    <select class="form-control" name="shift" id="shift">
                                                        <option value="Morning">Morning</option>
                                                        <option value="Evening">Evening</option>
                                                        <option value="Night">Night</option>
                                                    </select>
                                                
                                                   </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Starting Hours</strong></label>
                                                    <select name="o_hr" class="form-control custom-select" data-placeholder="" >
                                                     <option>--Select your Hours--</option>
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
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Closing Hours</strong></label>
                                                    <select name="c_hr" class="form-control custom-select" data-placeholder="Choose a Category" >
                                                     <option>--Select your Hours--</option>
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
                                            <div class="mb-3 row">
                                                <div class="form-group mb-3">
                                                    <label for=""><strong>Select your Event Date</strong></label>
                                                    <input type="date" name="edate" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Event Type</strong></label>
                                                    <select class="form-control" name="type" id="type">
                                                        <option value="Wedding">Wedding</option>
                                                        <option value="Birthday">Birthday</option>
                                                        <option value="Party">Party</option>
                                                    </select>
                                                
                                                   </div>
                                            </div>
                   
                   
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <a href="http://localhost/project/admin/all_dealer_service.php" class="btn btn-inverse">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>