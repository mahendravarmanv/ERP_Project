<?php
$con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
if (isset($_POST['CN'])) {
    $name = $_POST['CN'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "INSERT INTO classrooms VALUES ('$name')");
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