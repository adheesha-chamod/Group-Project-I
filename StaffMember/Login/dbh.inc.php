<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "taptobus";

 //create mysqli connection using above parameters
 // mysqli is a database extension in PHP programming language
 // mysqli supports for both pocedural and oop interfaces. mysql supports only procedural interfaces
 $conn = new mysqli($servername, $username, $password, $dbname );

 //$conn = mysqli_connect($servername, $username, $password, $dbname);

 // if this connnect successfully it will return connection object, otherwise return false

 //check connection
 if ($conn->connect_error) {
     die("Connection failed: ". $conn->connect_error);
 }
 
// if($conn){
//     echo "connection successfull";
// }

//  return $conn;
 ?>