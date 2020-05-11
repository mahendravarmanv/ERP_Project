<?php
$con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
if (isset($_POST['in_class']) and ($_POST['in_subject'])) {
    $class = $_POST['in_class'];
	$subject = $_POST['in_subject'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "INSERT INTO subject_combination VALUES (0,'$class','$subject')");
if ($q) {
    $message = "Classroom added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Bad Error";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<script>
        {window.location = "index.php";}
   
   </script>