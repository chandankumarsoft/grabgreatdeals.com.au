<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('#a').click(function(){
             $.ajax({
             	url:'select.php',
             	method:'POST',
             	datatype:'html',
             	success:function(data)
             	{
             	$('#hi').html(data);

             }
           });
			});
		});
	</script>
  <div id="hi">
  	
  </div>
  <div id="a">
  	<input type="button" name="">
  </div>
</body>
</html>