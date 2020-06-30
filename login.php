<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<style type="text/css">
	*{
		margin:0px;
		padding:0px;		
	}
	body
	{
  background-color: white;
	}
	table
	{
		background-color: blue;		
		width: 400px;	
		height:100px;
		margin:20% 35%;
		border-radius: 10px;
		border-style: none;
		text-align: center;

			}
	 table tr td input{
		border-radius: 10px;
		border-style: none;
		text-align: center;
	}

	

</style>
<body>
	
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


	
	if(isset($_POST['submit']))
	{
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";
    $result=mysqli_query($conn, $sql);
     if(mysqli_num_rows($result)>0)
     {
     	header('location:date.php');
     	exit();
     }
     else
     {
     	echo "wrong Password entered";
     }
    }
	 ?>
  <form method="post">

  	<table>
  		<tr>
  			<td>
  	<label>User Id</label>
  	</td>
  </tr>
  	<tr>
  		<td>
  	<input type="text" name="username" placeholder="Enter Your username">
  </td>	
      </tr>
    <tr>
    	<td>
  	<label>Password</label>
  	</td>
  	</tr>
  	<tr>
  		<td>
  	<input type="password" name="password" placeholder="Enter Your Password">
          
          </td>
      </tr>
     <tr>
     	<td>
  	<input type="submit" name="submit">
  	<input type="reset" name="reset"> 	
  </td>
   </tr>
</table>
  </form>
</body>
</html>