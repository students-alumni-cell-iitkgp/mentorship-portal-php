<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
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
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->


			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi <?php echo $name;?><span class="caret"></span></a>

					</li><li>
					<form action="" method="post">

						<button class="" style="position:relative;top:10px;" name="logout"> Logout</button>
					</form></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!--img src="http://www.alumnimeet.iitkgp.ernet.in/other/mentorship/img/gym1.jpg" style="position:relative;top:-20px;" width="100%" height="400" class="img img-rounded"-- >

	<div class="container">
		<div class="row">

			<div  class="col-md-3" >

			

				<br/>
				<br/>

				<div style="">
					<div class="list-group"><?php
						if($this->input->post('cgpa')==''){
							echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">' .$email .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Phone Number </strong>'.'<span class="pull-right">'. $phone .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Year Of Graduation</strong>'.'<span class="pull-right">'.$pout .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">' .$department.'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			


						}
						else {
							echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Roll Number </strong>'.'<span class="pull-right">'. $roll .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Joining Year </strong>'.'<span class="pull-right">' .$join .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			

						}

						?>
					</div>
				</div>
			</div><!--col-md-3 ends -->

			<div class="col-md-6">
				<br/>

				<div style="margin:30px 0px 5px 0px" class="well">
					<h3>
						Welcome to the Student-Alumni Mentorship Programme!
					</h3>

					
					<h4>
						Thank you for registering! We will allot a  <?php if($this->input->post('cgpa')==''){ echo  "Mentee" ;} 
						else { echo "Mentor" ;  }?> to you soon.
					</h4>

					
						
						
						
						
					</a>
				</div>
			</div>
			<div class="col-md-3" >

				
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
		<footer style="background-color:black; color:white; text-align:center; padding:10px; position:relative; bottom:0px; width:100%">&copy; Students' Alumni Cell</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>
