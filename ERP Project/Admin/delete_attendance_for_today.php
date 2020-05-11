<?php


if(isset($_POST['delete'])) {

    $con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   $value = $_POST['taken_by'];
$sql = "DELETE FROM `attendance_taken` WHERE date='$ThisDate' and taken_by = '$value'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
        if(!alert('attendance deleted successfully.')){window.location = "take_attendence.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not delete attendance.Some error occured')){window.location = "index.php";}
   
     </script>
   <?php
   }

$conn->close();

			  }
?>