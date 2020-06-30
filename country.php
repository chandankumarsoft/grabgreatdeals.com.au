<?php 
          $conn=mysqli_connect('localhost','root','');
          mysqli_select_db($conn,'test');  

		?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<div class="container col-lg-4">
    <form>
<div id="country">
  country:<select class="form-control" onchange="myfun(this.value)">
  	<?php 
  $sql="SELECT * FROM countries";
   $result=mysqli_query($conn,$sql);
   while ($row=mysqli_fetch_array($result))
    {
    	?>
   	<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
   	<?php
   }
  	 ?>  	
  </select>	
</div>
<div>
  state:<select class="form-control" id="states" onchange="myfun1(this.value)">
  	<option></option>
  </select>	
</div>
<div>
	city:<select class="form-control" id="city">
		<option></option>
	</select>
</div>
</div>
</form>
<script type="text/javascript">
	function myfun(datavalue){
     $.ajax({
     	url:'state.php',
     	method:'POST',
     	data:{data:datavalue},
     	success:function(result)
     	{
     		$('#states').html(result);
     	}
     });
	}


	function myfun1(datavalue1){
     $.ajax({
     	url:'city.php',
     	method:'POST',
     	data:{data1:datavalue1},
     	success:function(result1)
     	{
     		$('#city').html(result1);
     	}
     });
	}

</script>
</body>
</html>