<?php 
$conn = mysqli_connect('localhost','root','','erp_project');
if(isset($_POST['submit']))
{
	$student = $_POST['student'];
	$teacher = $_POST['teacher'];
	$sql=mysqli_query($conn,"select * from feedback where student_name='$student' and faculty_name='$teacher'");
	$result=mysqli_num_rows($sql);
	if($result)
	{
		?>
		<script>
        if(!alert('Feedback already provided')){//window.location = "feedback.php";}
   
		</script>
		<?php
	}
	else
	{
		$ques1 = $_POST['quest1'];
		$ques2 = $_POST['quest2'];
		$ques3 = $_POST['quest3'];
		$ques4	 = $_POST['quest4'];
		$ques5 = $_POST['quest5'];
		$query="insert into feedback values('','$student','$teacher','$ques1','$ques2','$ques3','$ques4','$ques5')";
		mysqli_query($conn,$query);
		?>
		<script>
        if(!alert('Feedback added')){window.location = "feedback.php";}
   
		</script>
		<?php
	}
}
?>