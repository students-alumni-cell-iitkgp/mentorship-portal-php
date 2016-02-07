<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<<<<<<< HEAD
=======
//session_start();
>>>>>>> 0f42444c8afa6505c426a3eb0a37c5034bf1182b
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome <?php $name; ?> </title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

	</style>
</head>
<body>
	<div class="container">
<<<<<<< HEAD
		<h2> Welcome <?php $name; ?> </h2>
	</div>
=======
		<div class="row">

			<div  class="col-md-3" >

				<h1 class="jumbotron">

					Hey, <?php echo $name; ?>

				</h1>

				<br/>
				<br/>

				<div style="">
					<div class="list-group">
						<li class="list-group-item"><strong>Email </strong><span class="pull-right"> <?php echo $email; ?> </span></li>
						<li class="list-group-item"><strong>Roll Number </strong><span class="pull-right"> <?php echo $roll; ?> </span></li>
						<li class="list-group-item"><strong>Joining Year </strong><span class="pull-right"> <?php if(isset($_POST['sub'])) {echo $join;}
							else {echo $join_year; }		 ?> </span></li>
							<li class="list-group-item"><strong>Department </strong><span class="pull-right"> <?php echo $department; ?> </span></li>
							<li class="list-group-item"><strong>Hall </strong><span class="pull-right"> <?php echo $hall; ?> </span></li>
						</div>
					</div>
				</div><!--col-md-3 ends -->

				<div class="col-md-6">
					<br/>
					<br/>
					<br/>
					<div style="margin:30px 0px 5px 0px" class="well">
						<h3>
							Welcome to the Student-Alumni Mentorship Programme!
						</h3>

						<h4>
							Thank you for registering! We will allot a mentor to you soon.
						</h4>

						<h3>Feel Free to get in touch with your Mentor</h3>
						

						
						
						
						
					</a>
				</div>
			</div>
			<div class="col-md-3" >
				<form action="" method="post">

					<button class="btn btn-danger btn-lg" style="float:right;position:relative;top:10px;" name="logout"> Logout</button>
				</form>
				
				<?php 
				if (isset($_POST['logout'])) {
					# code...
					session_destroy();
					header('location:index');
				}
				?>
			</div>
		</div>
	</div>		
>>>>>>> 0f42444c8afa6505c426a3eb0a37c5034bf1182b
</body>
</html>