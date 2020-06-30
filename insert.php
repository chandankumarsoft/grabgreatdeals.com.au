<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<body>
<div class="container"><br>
	<h1 class="text-center">Insert Data Into ajax and Php</h1><br>
	<div class="col-lg-8 m-auto">
	<form id="myform" action="form.php" method="post">
		
		<div class="form-group">
	      <label>Name</label>
          <input type="text" name="username" id="username" class="form-control">
		</div>
		<div class="form-group">
	      <label>password</label>
          <input type="password" name="password" id="password" class="form-control">
		</div>
		<input type="button" name="submit" value="Submit" id="submit" class="btn btn-success">
	</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(){
           $.ajax({
           	url:'form.php',
           	method:'POST',
           	data:$('form').serialize(),
           	success:function(res){
           		if(res=='False' || res=='false' && res!='')
           		{
           			alert(res);
           		}
           		else
           		{
           			$('#username').val('');
           			$('#password').val('');
           		}
           	}
           });

		});
	});

</script>
</body>
</html>