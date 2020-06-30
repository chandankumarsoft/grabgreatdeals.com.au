<!DOCTYPE html>
<html>
<body>

<h2>My First JavaScript</h2>

<p onclick="document.getElementById('demo').innerHTML=Date()">chandan</p>
<table height="400" width="400" bgcolor="blue" id="demo"></table>
<script type="text/javascript">
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script>
<?php phpinfo(); ?>
</body>
</html> 
