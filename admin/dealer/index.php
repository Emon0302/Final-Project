<?php
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:http://localhost/f1/admin/index.php');
}
elseif($_SESSION['role'] == "User")
{
	header('location:http://localhost/f1/admin/index.php');
}
else{
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `admin_order`";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
$d_orders= $stmt->fetchAll();
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

    <title>Banners List</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4"> List</h1>

                <table class="table  table-success table-striped table-bordered border-dark table-hover">
                    <thead>
                    <tr>

                        <th scope="col">Username</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Event_date</th>
                        <th scope="col">Event_type</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($d_orders as $d_order):


                    ?>
                    <tr>

                        <td><?= $d_order['username'];?></td>
                        <td><?= $d_order['quantity'];?></td>
                        <td><?= $d_order['price'];?></td>
                        <td><?= $d_order['edate'];?></td>
                        <td><?= $d_order['type'];?></td>
                        <td>
                            <?php
                            if($d_order['status']==NULL)
                            {
                                echo 'NO FEEDBACK';
                            }
                            else{
                                echo $d_order['status'];
                            }
                            ?>
                            
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="show.php?o_id=<?=$d_order['o_id'];?>"><button type="button" class="btn  btn-outline-primary">Show</button></a>
                            <a href="edit.php?o_id=<?=$d_order['o_id'];?>"> <button type="button" class="btn  btn-outline-secondary">Edit</button></a>
                                <a href="delete.php?de_id=<?=$d_order['o_id'];?>"> <button type="button" class="btn  btn-outline-danger">Delete</button></a>
                                <a href="Inv/invoice.php?o_id=<?=$d_order['o_id'];?>"> <button type="button" class="btn  btn-outline-danger">Invoice</button></a>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>


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
