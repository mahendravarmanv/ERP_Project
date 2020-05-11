<?php

$id = $_GET['name'];
$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'),
    "DELETE FROM teachers WHERE id = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect('localhost','root','','erp_project'), $drop);
if ($drop) {

    header("Location:index.php");

} else {
    echo 'Error';
}
?>
<script>
        {window.location = "index.php";}
   
   </script>
