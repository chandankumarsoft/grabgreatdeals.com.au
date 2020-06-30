<?php 
          $conn=mysqli_connect('localhost','root','');
            mysqli_select_db($conn,'test');  

		?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>
<body>

<div class="container col-lg-6">
	<h2 class="text-center text-danger">Get data from database</h2>
	<form>
		Username:<input type="text" name="user" class="form-control">
		Password:<input type="password" name="password" class="form-control">

		
		Degree:<select class="form-control" onchange="myfun(this.value)">

			
			 <?php
                $sql="SELECT * FROM degree";
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result))
                 {
                 	?>
                	 <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php
                }
			 ?>
		</select>
		Duration:<select class="form-control" id="dataget">
			<option>First Select Degree</option>
		</select>
	</form>
</div>
<script type="text/javascript">
	function myfun(datavalue)
	{
		$.ajax({

			url:'duration.php',
			method:'POST',
			data:{data:datavalue},
			success:function(result){
              $('#dataget').html(result);
			}

		})
	}
</script>
</body>
</html>
