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
	<div class="container">
		<div class="row">

			<div  class="col-md-3" >

				<h1 class="jumbotron">

					Hey, <?php echo $name; ?>

				</h1>

				<br/>
				<br/>

				<div style="">
					<div class="list-group"><?php
						$query = $this->db->get_where('contact', array('email' => $email));
									$row=$query->row_array();		
							if($cgpa == '') {
							echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Phone Number </strong>'.'<span class="pull-right">'. $row['phone'] .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Year Of Graduation</strong>'.'<span class="pull-right">' .$passout_year .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			
					
							}
							else {
								echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Roll Number </strong>'.'<span class="pull-right">'. $roll .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Joining Year </strong>'.'<span class="pull-right">' .$join_year .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			
					
							}
							?>
							</div>
					</div>
				</div><!--col-md-3 ends -->

				<div class="col-md-6">
					<br/>
					
					<img src="http://www.alumnimeet.iitkgp.ernet.in/other/mentorship/img/p.jpg" width="560" height="100" class="img img-rounded" />
					<br/><br/><br/>
					<div style="margin:30px 0px 5px 0px" class="well">
						<h3>
							Welcome to the Student-Alumni Mentorship Programme!
						</h3>

					
						<h4>
							Thank you for registering! We will allot a  <?php if($cgpa == ''){ echo  "Mentee" ;} 
																		else { echo "Mentor"  ; }?> to you soon.
						</h4>

						<h3>Feel Free to get in touch with your  <?php if($cgpa == ''){ echo  "Mentee" ;} 
																		else { echo "Mentor" ;  }?>  </h3>
						


						
						
						
						
					</a>
				</div>
			</div>
			<div class="col-md-3" >
				<form action="" method="post">

					<button class="btn btn-danger btn-lg" style="float:right;position:relative;top:20px;" name="logout"> Logout</button>
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
</body>
</html>
