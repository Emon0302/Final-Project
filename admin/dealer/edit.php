<?php

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
// print_r($page);
// var_dump($banner);

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
                    <form method="post" action="update.php?o_id=<?=$d_order['o_id'];?>">
                    <div class="mb-2 row">  
                    <div class="form-group">           
                        <label for="name" class="col-sm-2 col-form-label fw-bold">Dealer Name :</label>
                        <div class="col-sm-10">
                          <?php
                            $query1 = "SELECT * FROM `admin_order` where `o_id`=$get"; 

                            $stmt1 = $conn->prepare($query1);
                            $result1 = $stmt1->execute();
                            
                            $d_order1= $stmt1->fetch();?>
                         <input type="text" class="form-control" id="username" name="username" value="<?=$d_order1['username'];?>"readonly >
                         <input type="hidden" class="form-control" id="de_id" name="de_id" value="<?=$d_order1['de_id'];?>">
                         
                         </div>
                    </div>
                    </div>
                   
                    
                   
                    <div class="mb-2 row">   
                    <div class="form-group">                  
                        <label for="quantity" class="col-sm-2 col-form-label fw-bold">Quantity :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="quantity" name="quantity" value="<?=$d_order['quantity'];?>"readonly>
                         </div>
                    </div>
                    </div>
                    <div class="mb-2 row">  
                    <div class="form-group">                   
                        <label for="price" class="col-sm-2 col-form-label fw-bold">Price :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="price" name="price" value="<?=$d_order['price'];?>"readonly>
                         </div>
                    </div>
                  </div>
                         <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Event Shift</strong></label>
                                                    <div class="col-sm-10">
                         <input type="text" class="form-control" id="shift" name="shift" value="<?=$d_order['shift'];?>"readonly>
                         </div>
                                                
                                                   </div>
                                            </div>
                                           
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Starting Hours</strong></label>
                                                    <div class="col-sm-10">
                         <input type="text" class="form-control" id="o_hr" name="o_hr" value="<?=$d_order['o_hr'];?>"readonly>
                         </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="control-label"><strong>Closing Hours</strong></label>
                                                    <div class="col-sm-10">
                         <input type="text" class="form-control" id="c_hr" name="c_hr" value="<?=$d_order['c_hr'];?>"readonly>
                         </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group mb-3">
                                                    <div class="col-sm-10">
                                                     <label for="date"><strong> Event Date</strong></label>
                                                     <input type="text" name="edate" class="form-control"value="<?=$d_order['edate'];?>"readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group mb-3">
                                                <div class="col-sm-10">
                                                    <label class="control-label"><strong>Event Type</strong></label>
                                                    <input type="text" name="type" class="form-control"value="<?=$d_order['type'];?>"readonly>
                                                </div>
                                                
                                                   </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group mb-3">
                                                <div class="col-sm-10">
                                                    <label class="control-label"><strong>STATUS</strong></label>
                                                    <select class="form-control" name="status" id="status">
                                                    <option value="">Select Status</option>
                                                     <option value="in process">Paid & In Process</option>
                                                        <option value="completed">Completed</option>
	                                                    <option value="rejected">rejected</option>
                                                    </select>
                                                </div>
                                                   </div>
                                            </div>
                   
                    <button type="submit" class="btn btn-dark">Submit</button>

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