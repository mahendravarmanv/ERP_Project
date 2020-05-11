	<?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
?>

<?php

error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
$con = mysqli_connect('localhost','root','','erp_project');
$result = mysqli_query($con,"SELECT `date` FROM `attendance_taken` WHERE date = '$ThisDate'");
$result1 = mysqli_query($con,"SELECT `taken_by` FROM `attendance_taken` WHERE date = '$ThisDate'");
$row = mysqli_fetch_array($result);
$total = $row[0];
$today = strval($total);
while($row1 = mysqli_fetch_assoc($result1))
{
//echo $row1['taken_by'];

if($total == $_POST['date'][0] and $row1['taken_by'] == $_POST['taken_by'])
{
	?>
	<script>
        if(!alert('attendance has already been taken')){window.location = "view_delete_admin.php";}
   
   </script>
<?php
	}	
}	
if($total != $_POST['date'][0] or $row1['taken_by'] != $_POST['taken_by'])
{
$s = "INSERT INTO `attendance_taken`(`sid`, `name`, `date`, `attendance`, `taken_by`) VALUES";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
		$s .="('".$_POST['sid'][$i]."','".$_POST['name'][$i]."','".$_POST['date'][$i]."','".$_POST['attendence'][$i]."','".$_POST['taken_by']."'),";
	}
	$s = rtrim($s,",");
  if (mysqli_query($con,$s))
  {
  ?>
   <script>
        if(!alert('attendance added successfully.')){window.location = "index.php";}
   
   </script>
  <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not add attendance.Some error occured')){window.location = "index.php";}
   
     </script>
   <?php
			}
	}
}

?>
 