<?php 
          $conn=mysqli_connect('localhost','root','');
          mysqli_select_db($conn,'test');  

		?>
		 <?php
		         $id=$_POST['data'];
                $sql="SELECT * FROM states WHERE country_id=".$id;
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result))
                 {
                 	?>
                	 <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php
                }
			 ?>