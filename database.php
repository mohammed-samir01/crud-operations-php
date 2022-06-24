<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

      // echo "Connected successfully"."<br>";

  } catch (PDOException $ex) {

     echo $ex->getMessage();

  }



//    class database{
//
//        function __construct(){
//
//            $host = 'localhost';
//            $dbname = 'test';
//            $user = 'root';
//            $pass = '';
//
//            try {
//                $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
//                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//                return $conn;
//                echo "Connected successfully"."<br>";
//
//            }
//            catch(PDOException $e) {
//
//                echo 'ERROR: ' . $e->getMessage();
//            }
//
//        }
//
//    }
//

?>