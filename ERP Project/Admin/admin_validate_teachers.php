<?php

$con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
if (isset($_POST['TN']) && isset($_POST['TF']) && isset($_POST['TE']) && isset($_POST['TD']) && isset($_POST['AL'])) {
    $name = $_POST['TN'];
    $facno = $_POST['TF'];
    $designation = $_POST['TD'];
    $alias = $_POST['AL'];
    $contact = $_POST['TP'];
    $email = $_POST['TE'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation','$contact','$email' , '123')");
$sql = "CREATE TABLE " . $facno . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query(mysqli_connect('localhost','root','','erp_project'), $sql);
$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
for ($i = 0; $i <  6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect('localhost','root','','erp_project'), $sql);
}
if ($q) {
    $message = "Teacher added";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Bad Error.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
<script>
        {window.location = "index.php";}
   
   </script>