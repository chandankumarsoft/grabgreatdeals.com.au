<?php 
          $conn=mysqli_connect('localhost','root','');
          mysqli_select_db($conn,'test');  


extract($_POST);
if($username!='' && $password!='')
{
	$data="true";
	$sql="INSERT INTO login (username,password)VALUES('".$username."','".$password."')";
	if(mysqli_query($conn, $sql))
	{
		echo $data;
	}
}
else
{
	$data="false";
	echo $data;
}
?>