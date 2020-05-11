   <?php
	$sem = $_POST['in_class'];
	$name = $_POST['CN'];
	$con = mysqli_connect('localhost','root','','erp_project');
	$output = 0;
	$roll_no = 0;
    //echo "<select name='another_add_result' class='list-group-item'><option value=''>Select one</option>";
	$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "Select * from student");
	while($row1 = mysqli_fetch_assoc($q))
	{
		if($name == $row1['name'] and $row1['semester'] == $sem)
		{
			$rollno = $row1['email'];
			$output = 1;
		}	
	}
	if($output == 0)
	{
		?><script>
        if(!alert('Invalid Details')){window.location = "admin_add_result.php";}
   
   </script>
	<?php }
	else
	{
		$subject1 = $_POST['S1'];
		$subject2 = $_POST['S2'];
		$subject3 = $_POST['S3'];
		$subject4 = $_POST['S4'];
		$subject5 = $_POST['S5'];
		$total = $subject2+$subject3+$subject4+$subject5;
		$percentage = $total * 100/500;
		$s = "INSERT INTO result VALUES('$rollno' , '$name' , '$sem' , '$subject1' , '$subject2', '$subject3', '$subject4', '$subject5' , '$total' , '$percentage')";
		if (mysqli_query($con,$s))
		{
		?>
   <script>
        if(!alert('Data added successfully.')){window.location = "admin_add_result.php";}
   
   </script>
  <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not add data.Some error occured')){window.location = "admin_add_result.php";}
     </script>
	<?php
		}
	
	}
	
	?>