<?php

if (isset($_POST['tobealloted'])) {
    $subject = $_POST['tobealloted'];
    $teacher = $_POST['toalloted'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), "UPDATE subjects SET isAlloted=1, allotedto='$teacher' WHERE subject_code='$subject'");

if ($q) {
    $message = "Done.";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Bad Error";
    $message = $subject;
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
<script>
        {window.location = "index.php";}
   
   </script>