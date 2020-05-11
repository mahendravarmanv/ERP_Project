<?php
$con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
if (isset($_POST['SN']) && isset($_POST['SC']) && isset($_POST['SS']) && isset($_POST['SD'])) {
    $name = $_POST['SN'];
    $code = $_POST['SC'];
    $sem = $_POST['SS'];
    $course = $_POST['ST'];
    $dept = $_POST['SD'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "INSERT INTO subjects VALUES ('$code','$name','$course','$sem','$dept',0,'','','')");
if ($q) {
    $message = "Subject added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Bad Error";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<script>
        {window.location = "index.php";}
   
   </script>