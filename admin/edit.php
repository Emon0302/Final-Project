<?php

$get = $_GET['id'];
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `categories` where `id`=$get"; 

$stmt = $conn->prepare($query);
$result = $stmt->execute();

$category = $stmt->fetch();
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
                    <h1 class="text-center">Add Category</h1>
                    <form method="post" action="update.php?id=<?=$category['id'];?>">
                    <div class="mb-3 row">                     
                        <label for="name" class="col-sm-2 col-form-label">Name :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="name" name="name" value="<?=$category['name'];?>">
                         </div>
                    </div>

                    <div class="mb-3 row">                     
                        <label for="link" class="col-sm-2 col-form-label">Link :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="link" name="link" value="<?=$category['link'];?>">
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