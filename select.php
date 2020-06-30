<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="SELECT * FROM login";
    $result=mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result))
      {
         echo $row['username'];
         echo $row['password'];
       }
    ?>