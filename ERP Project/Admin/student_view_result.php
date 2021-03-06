<?php

//make connection
$con = mysqli_connect('localhost','root','','erp_project');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Attendence</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">View Attendence</h2>                        
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Student Result</li>
            							<li class="active">View Result</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

			
			
			 
                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Attendence Info</h5>
                                                </div>
                                            </div>

                                          <div class="panel-body p-20">
	 <form  action="" method="post">
      <label for="email">Mail ID:</label>
      <input type="text" class="form-control" name="sid" placeholder="Enter Mail ID" required>
		<button type="submit" class="btn btn-lg" height = "120%">Submit</button>
		</form>
                                                <!--<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
													 <thead>
														<tr>
															<th>SID</th>
															<th>Name</th>
															<th>Date</th>
															<th>Present/Abscent</th>
														  </tr>
														</thead>													
                                                       
                                                    <tbody>
                                                    </tbody>
                                                </table>-->
												<?php 
												error_reporting(E_ERROR | E_PARSE);

				  ?>
 
		<br/>
		<br/>

		<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
      <tr>
															<th>ID</th>
															<th>Name</th>
															<th>Semester</th>
															<th>Subject1</th>
															<th>Subject2</th>
															<th>Subject3</th>
															<th>Subject4</th>
															<th>Subject5</th>
															<th>Total</th>
															<th>Percentage</th>
      </tr>
    </thead>
    <tbody>		
 <?php 
$sid = $_POST['sid'];

$sql="SELECT * FROM `result` WHERE email_id='$sid'";
$record = mysqli_query($con,$sql);
while($post=mysqli_fetch_assoc($record)) {
   ?>
      <tr>
        <td><?php echo $post['email_id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['semester']; ?></td>
		<td><?php echo $post['subject1']; ?></td>
		<td><?php echo $post['subject2']; ?></td>
		<td><?php echo $post['subject3']; ?></td>
		<td><?php echo $post['subject4']; ?></td>
		<td><?php echo $post['subject5']; ?></td>
		<td><?php echo $post['total']; ?></td>
		<td><?php echo $post['percentage']; ?></td>
	   </tr>
              
      
<?php } ?>    
     </tbody>
    </table>
	

 

 
											</div>
                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>