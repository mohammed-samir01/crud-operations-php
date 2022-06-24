<?php

  try {
    $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

      // echo "Connected successfully"."<br>";
      

$result=  $conn->query("select id,name,email,password,created from users where id='{$_GET['id']}'");

$row   = $result->fetch(PDO::FETCH_ASSOC);

echo "<h3>Information About Student</h3>";
echo "<ul>";

  foreach($row as $std_select){

    echo "<li>$std_select</li>";

  }

  echo "</ul>";
  echo "<a href='list.php' style='background-color: blue; border: none; border-radius: 5px; color: white;text-decoration:none; padding: 10px 10px'>Back</a>";


  } catch (PDOException $ex) {
     echo $ex->getMessage();
  }
