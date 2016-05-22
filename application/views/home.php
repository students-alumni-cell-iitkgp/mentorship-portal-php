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
				body {
			background-image: url('/img/bg.jpg');
		}
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
	<!--img src="/img/gym1.jpg" style="position:relative;top:-20px;" width="100%" height="400" class="img img-rounded" /-->

	<div class="container">
		<div class="row">

			<div  class="col-md-3" >

				

				<br/>
				<br/>

				<div style="">
					<img src="/img/user.png" class="img img-rounded" style="position:relative;left:20px;" width="200" height="180" /><br/><br/>
					<div class="list-group"><?php
						if($this->input->post('cgpa')==''){
							echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">' .$email .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Phone Number </strong>'.'<span class="pull-right">'. $phone .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Year Of Graduation</strong>'.'<span class="pull-right">'.$pout .'</span>'.'</li>';
							echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">' .$department.'</span>'.'</li>';
							//echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			


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

					
					


					
					
					
					
					
				</div>
			</div>
			<div class="col-md-3" >
				<div style="">
					<br><br><h3 class="center" style="background-color:lightgrey;padding:10px;border-radius:8px;"> Prominent Alumni Registered for this Programme </h3>
					<marquee behavior="scroll" direction="up" scrollamount="8" height="302" >
						<div class="marquee" >					
							<ul class="list-group" data-spy="scroll" data-target=".navbar" data-offset="50" >
								<li class="list-group-item prominent" id="1">Hardward Business School</li>
								<li class="list-group-item prominent" id="4">Bank fo America</li>
								<li class="list-group-item prominent" id="4">RBL</li>
								<li class="list-group-item prominent" id="4">Citi Bank</li>
								<li class="list-group-item prominent" id="10">McKinsey & Co</li>
								<li class="list-group-item prominent" id="14">Credit Suisse</li>
								<li class="list-group-item prominent" id="4">JP Morgan Chase</li>
								<li class="list-group-item prominent" id="4">Standard Chartered Bank</li>
								<li class="list-group-item prominent" id="4">Deutsche Bank</li>
								<li class="list-group-item prominent" id="20">Hawkins Cookers Limited</li>
								<li class="list-group-item prominent" id="10">Mindtree Limited</li>
								<li class="list-group-item prominent" id="20">Lenovo</li>
								<li class="list-group-item prominent" id="10">Delotti Consultancy SEA</li>
								<li class="list-group-item prominent" id="18">Amazon</li>
								<li class="list-group-item prominent" id="9">Hewelett Packard</li>
								<li class="list-group-item prominent" id="10">Cognizant Technology</li>
								<li class="list-group-item prominent" id="10">Infosys Limited</li>
								<li class="list-group-item prominent" id="9">IBM</li>
								<li class="list-group-item prominent" id="14">Stanford Gradute School of Business and Sustainable Growth Initiative</li>
								<li class="list-group-item prominent" id="10">The Boston Consulting Group</li>
								<li class="list-group-item prominent" id="18">Price Water House</li>
								<li class="list-group-item prominent" id="14">PwC</li>
								<li class="list-group-item prominent" id="10">Capgemini</li>
								<li class="list-group-item prominent" id="10">Miebach Cousulting</li>
								<li class="list-group-item prominent" id="14">KPMG</li>
								<li class="list-group-item prominent" id="10">Schlumbreger</li>
								<li class="list-group-item prominent" id="22">Sheil Oil Company</li>
								<li class="list-group-item prominent" id="22">BP</li>
								<li class="list-group-item prominent" id="22">Essar Oil Limited</li>
								<li class="list-group-item prominent" id="15">Cairn India Limited</li>
								<li class="list-group-item prominent" id="13">Reliance Industries</li>
								<li class="list-group-item prominent" id="15">GE Oil & Gas</li>
								<li class="list-group-item prominent" id="15">Occidental Petroleum</li>
								<li class="list-group-item prominent" id="22">Indain Oil Corporation Limited</li>
								<li class="list-group-item prominent" id="15">ONGC</li>
								<li class="list-group-item prominent" id="all">MIT</li>
								<li class="list-group-item prominent" id="all">Texas A & M</li>
								<li class="list-group-item prominent" id="5">Wockhardt Ltd</li>
								<li class="list-group-item prominent" id="9">Microsoft Research</li>
								<li class="list-group-item prominent" id="10">Innovation Lab, Tata Consulantcy Services</li>
								<li class="list-group-item prominent" id="all">Norwegian Unversity of Science and Technology</li>
								<li class="list-group-item prominent" id="all">Georgia Institute of Technology</li>
								<li class="list-group-item prominent" id="all">GFZ Potsdam</li>
								<li class="list-group-item prominent" id="all">Swansea University</li>
								<li class="list-group-item prominent" id="5">Dalichi Sankyo India Pharma Limited</li>
								<li class="list-group-item prominent" id="all">University of Cincinnati</li>
							</ul>
						</div>
					</marquee>
				</div>
				
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
	<footer style="background-color:black; color:white; text-align:center; padding:10px; position:absolute; bottom:0px; width:100%">&copy; Students' Alumni Cell</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>
