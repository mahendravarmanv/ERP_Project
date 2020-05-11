
<?php

error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['new_question']) and ($_POST['option1']) and ($_POST['option2']) and ($_POST['option3']) and ($_POST['option4']) and ($_POST['answer'])) {

    $con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
$con = mysqli_connect('localhost','root','','erp_project');
$a = $_POST['taken_by'];
$b = $_POST['new_question'];
$c = $_POST['new_type'];
$d = $_POST['option1'];
$e = $_POST['option2'];
$f = $_POST['option3'];
$g = $_POST['option4'];
$h = $_POST['answer'];
if(isset($_POST['taken_by']))
{
	$s = "INSERT INTO questions VALUES(0 ,'$b','$a','$d','$e','$f','$g' ,'$h')";
}
  if (mysqli_query($con,$s))
  {
  ?>
   <script>
        if(!alert('data added successfully.')){window.location = "index.php";}
   
   </script>
  <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not add data.Some error occured')){window.location = "index.php";}
   
     </script>
   <?php
			}
	}
	else{
		?>
		 <script>
          if(!alert('Some details missing')){window.location = "index.php";}
   
     </script>
	<?php
	
	}

?>