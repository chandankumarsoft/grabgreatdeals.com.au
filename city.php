<?php 
          $conn=mysqli_connect('localhost','root','');
          mysqli_select_db($conn,'test');  

		?>
		 <?php
		         $id=$_POST['data1'];
                $sql="SELECT * FROM cities WHERE state_id=".$id;
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result))
                 {
                 	?>
                	 <option><?php echo $row['name']; ?></option>
                <?php
                }
			 ?>