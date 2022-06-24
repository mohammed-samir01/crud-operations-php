<?php

if(isset($_GET['id'])){

  try {
      $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

        // echo "Connected successfully"."<br>";

      $result=  $conn->query("select * from users where id='{$_GET['id']}'");

      $row   = $result->fetch(PDO::FETCH_ASSOC);


            // echo"<pre>";
            // print_r($row);
            // echo"</pre>";

    } catch (PDOException $ex) {

      echo $ex->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
    <form class="row g-3" method="post" action="controller.php">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" value="<?php echo $row['name']?>" id="inputEmail4" name="name">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Email</label>
        <input type="email" class="form-control" value="<?php echo $row['email']?>" id="inputPassword4" name="email">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Password</label>
        <input type="text" class="form-control" value="<?php echo $row['password']?>" id="inputAddress" placeholder="1234 Main St" name="password">
        <input type="hidden" class="form-control" value="<?php echo $row['id']?>" id="inputAddress" placeholder="1234 Main St" name="id">
    </div>
<!--        <button type="submit" class="btn btn-primary" name="edit">Update</button>-->
    <div class="d-flex justify-content-evenly mx-4 mb-3 mb-lg-4">
        <button type="submit" class="btn btn-primary btn-lg " name="edit"><a class="text-decoration-none text-white" href="controller.php">Edit</a></button>
        <button type="button" class="btn btn-primary btn-lg " name="cancel"><a class="text-decoration-none text-white" href="list.php">Cancel</a></button>
    </div>

    </form>

</div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>