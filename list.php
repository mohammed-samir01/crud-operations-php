<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


  </head>
  <body>
    <section class="section">
        <div class="container">
          <div class="row justify-content-center">
          </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <h1 class="text-center justify-content-center">Users Information</h1>
                    <button type="button" class="btn btn-white  btn-lg justify-content-end" name="userprofile"><a class="text-decoration-none" href="login.php">Log Out</a></button>
                  </div>
                  <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Password</th>
                                  <th>Created At</th>
                                  <th colspan="3">Action</th>
                                </tr>
                            </thead>
    <?php

      session_start();
      $email = $_SESSION['email'];

          if(isset($email)){

            require_once 'database.php';

            $data = $conn->query("select id,name,email,password,created from users");
            while($result=$data->fetch(PDO::FETCH_ASSOC)){

              echo "<tr>";
              
                  foreach($result as $std ){
                   
                    echo "<td>$std</td>";
                    
                  }
                echo "<td> <a href='view.php?id={$result['id']}'>View</a></td>";
                echo "<td> <a href='edit.php?id={$result['id']}'>Edit</a></td>";
                echo "<td> <a href='controller.php?id={$result['id']}&delete'>Delete</a></td>";
                echo "</tr>";
    
            };
            
            echo "</table>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</section>";
    
            echo "<br>"."<a href='login.php' style='background-color: black; border: none; border-radius: 5px; color: white;text-decoration:none; padding: 10px 10px'>Exit</a>";
    
     
          }else{
            header("Location:login.php");
          }
 

    ?>

      
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

      </body>
    </html>