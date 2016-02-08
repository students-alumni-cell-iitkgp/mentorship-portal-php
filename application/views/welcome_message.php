<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Mentorship-Portal</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		#bg {
			height: 400px;
			width: 100%;
			background-image: url('http://alumnimeet.iitkgp.ernet.in/other/mentorship/img/gymk.jpg');
			background-size:100% 100%;
		}
		#box {
			padding: 10px;
			width: 100%;
			background:rgba(0,0,0,.5);
			position: relative;
			margin:2px auto;
			text-align:justify;
			box-shadow: 0px 0px 4px #777;
		}

		#box2 {
			padding: 10px;
			min-height: 240px;
			text-align: center;
			background:rgba(255,255,255,.5);
			position: relative;
			margin-left:10px;
			box-shadow: 0px 0px 4px #777;
		}

		#al {
			padding: 10px;
			background:rgba(255,255,255,.75);
			position: relative;
			margin:2px auto;
			text-align:justify;
			box-shadow: 0px 0px 4px #777;
		}

		#logo
		{
			margin: 0 0 0 0 ;
			padding: 0 0 0 0 ;

		}

		#register
		{
			padding: 0 0 10px 0;
			width: 100%;
		}

		#register-btn
		{
			width: 100%;
			line-height: 40px;
			font-size: 20px;
			color:black;
			border-color: black;

		}

		#register-form
		{
			position: relative;
			top: -20px;
		}

		.logo{
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.white{
			color: white;
		}

	</style>
</head>
<body>
	
	<div id="bg">
		<div class="row" id="box" style="width:100%;float:right;margin-top:5px">
			<div class="col-md-4"></div>
			<?php 
			$this->load->helper('form');
			$for=array('class' => 'form-horizontal',
				'method' => 'post',
				'role' => 'form',

				);		
			echo form_open('index.php/welcome/member_area',$for);
			?>
			<div class="col-md-3">
				<?php
				$email1 = array('name' => 'eid' ,
					'type' => 'email',
					'class' => 'form-control',
					'placeholder' => 'Enter Your Email',
					'required' => 'required' );
				echo form_input($email1);
				?>
			</div>
			<div class="col-md-3">
				<?php
				$pwd = array('name' => 'pass' ,
					'type' => 'password',
					'class' => 'form-control',
					'placeholder' => 'Enter Your Password',
					'required' => 'required' );
				echo form_input($pwd);
				?>
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-success">Log In</button>
			</form>
		</div>
	</div>
</div>
<br>
<div class="container-fluid">
	<!--h2 style="position:relative;left:20px;">Mentorship Portal  </h2-->
	<hr>
	<div class="row">
		<div class="col-md-3" id="box2">
		<br><br>
			<!--h2 style="text-align:center;">Register Here</h2-->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registermentor">
				I want to be a Mentor
			</button>
			<br><hr><br>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registerstudent">
				I want to be a Mentee
			</button>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6" id="al">
			The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell as an initiative to create a platform for the exchange of ideas and experience between the alumni and the current students of IIT Kharagpur.<br><br>
			With an ocean of possibilities available, students often find it difficult to decide their way out into the future. There are lots of instances where students need  a mentor who can counsel and guide them through. The alumni can improve students' insight into various aspects of life.  Their journey and personal experiences can help the students and motivate them through this pivotal phase of life. Under this programme, we invite our alumni from across the world and from different fields to interact with the students and help them build their network and gain new perspective on the possibilities open to them after graduation.
		</div>
	</div>
	</div>
	<br>
	<footer id="box" style="background-color:black; color:white; text-align:center">&copy; Students' Alumni Cell</footer>
	<div class="modal fade" id="registerstudent" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align:center;">Register Here</h4>
				</div>
				<div class="modal-body">
					<?php
					$this->load->helper('form');
					$a = array('class'=>'form-horizontal',
						'method'=>'post',
						'role'=>'form');
					echo form_open('index.php/welcome/users',$a);					
					?>
					<div class="form-group">
						<div class="col-sm-12">
							<?php
							$fname = array('name' => 'name' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your Name',
								'required' => 'required' );
							echo form_input($fname);
							?>
						</div>



					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<?php
							$femail = array('name' => 'email' ,
								'type' => 'email',
								'class' => 'form-control',
								'placeholder' => 'Enter Your Email',
								'required' => 'required' );
							echo form_input($femail);
							?>
						</div>



					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<?php
							$fpass = array('name' => 'password' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your password',
								'type' => 'password',
								'required' => 'required' );
							echo form_input($fpass);
							?>
						</div>



					</div>
			<!--
			<div class="form-group">
				<div class="col-sm-12">
					<?php/*
					$fp = array('name' => 'password1' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Password Again',
						'type' => 'password' );
					echo form_input($fp);
					*/?>
				</div>
			</div>
		-->
		<div class="form-group">
			<div class="col-sm-12">
				<?php
				$fdep = array('name' => 'department' ,
					'class' => 'form-control',
					'placeholder' => 'Enter Your Department',
					'required' => 'required' );
				echo form_input($fdep);
				?>
			</div>



		</div>
		<div class="form-group">
			<div class="col-sm-12">
				<?php
				$fhall = array('name' => 'hall' ,
					'class' => 'form-control',
					'placeholder' => 'Enter Your Hall',
					'required' => 'required' );
				echo form_input($fhall);
				?>
			</div>

			<!--div class="form-group">
				<div class="col-sm-12">
					<?php
					$fb = array(
						'name' => '',
						'class' => 'form-control',
						'type' => 'submit',
						'value' => 'Submit'
						 );
					echo form_button($fb);
					?>
				</div>	
			</div-->
			<?php //echo form_close(); 
			?>

		</div> 
		<div id="f1">
			<div class="form-group">
				<div class="col-sm-12">
					<?php
					$froll = array('name' => 'roll' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Roll',
						'required' => 'required' );
					echo form_input($froll);
					?>
				</div>



			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php
					$fcg = array('name' => 'cgpa' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Cgpa',
						'required' => 'required' );
					echo form_input($fcg);
					?>
				</div>



			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fphone = array('name' => 'phone',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Phone No.',
						'required' => 'required');
					echo form_input($fphone);
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<?php /*
					$fcad = array('name' => 'current',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Current Academic Year');
					echo form_input($fcad);
					*/?>
					<select name='current' class='form-control'>
						<option value='-1'>Choose your Current Academic Year</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
					</select>	
				</div>

			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fjoin = array('name' => 'join',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Joining Year',
						'required' => 'required');
					echo form_input($fjoin);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<h4>In which field do you want to  be Mentored ?</h4>
					<select name='pref1' class='form-control'>
						<option value='-1'>Choose your 1st Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<select name='pref2' class='form-control'>
						<option value='-1'>Choose your 2nd Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<select name='pref3' class='form-control'>
						<option value='-1'>Choose your 3rd Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="form-group"	>	
			<div class="col-sm-12">		
				<button   name="sub" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
			</div>			
		</div>

	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
<div class="modal fade" id="registermentor" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
			</div>
			<div class="modal-body">

				<?php
				$this->load->helper('form');
				$a = array('class'=>'form-horizontal',
					'method'=>'post',
					'role'=>'form');
				echo form_open('index.php/welcome/users',$a);					
				?>
				<div class="form-group">
					<div class="col-sm-12">
						<?php
						$fname = array('name' => 'name' ,
							'class' => 'form-control',
							'placeholder' => 'Enter Your Name',
							'required' => 'required' );
						echo form_input($fname);
						?>
					</div>



				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<?php
						$femail = array('name' => 'email' ,
							'type' => 'email',
							'class' => 'form-control',
							'placeholder' => 'Enter Your Email',
							'required' => 'required' );
						echo form_input($femail);
						?>
					</div>



				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<?php
						$fpass = array('name' => 'password' ,
							'class' => 'form-control',
							'placeholder' => 'Enter Your password',
							'type' => 'password',
							'required' => 'required' );
						echo form_input($fpass);
						?>
					</div>



				</div>
			<!--
			<div class="form-group">
				<div class="col-sm-12">
					<?php/*
					$fp = array('name' => 'password1' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Password Again',
						'type' => 'password' );
					echo form_input($fp);
					*/?>
				</div>
			</div>
		-->
		<div class="form-group">
			<div class="col-sm-12">
				<?php
				$fdep = array('name' => 'department' ,
					'class' => 'form-control',
					'placeholder' => 'Enter Your Department',
					'required' => 'required' );
				echo form_input($fdep);
				?>
			</div>



		</div>
		<div class="form-group">
			<div class="col-sm-12">
				<?php
				$fhall = array('name' => 'hall' ,
					'class' => 'form-control',
					'placeholder' => 'Enter Your Hall' );
				echo form_input($fhall);
				?>
			</div>

			<!--div class="form-group">
				<div class="col-sm-12">
					<?php
					$fb = array(
						'name' => '',
						'class' => 'form-control',
						'type' => 'submit',
						'value' => 'Submit'
						 );
					echo form_button($fb);
					?>
				</div>	
			</div-->
			<?php //echo form_close(); 
			?>

		</div>
		<div id="f2" style="">
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpasout = array('name' => 'pout',
						'class' => 'form-control',
						'placeholder' => 'Enter Your PassOut Year',
						'required' => 'required');
					echo form_input($fpasout);
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-3">
					<h5>Select No. Of Mentees</h5>
				</div>
				<div class="col-sm-4">
					<select class="form-control">
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
						<option value="4">Four</option>
					</select>
				</div>
			</div>
			<h4>In which field do you want to Mentor in?</h4>
			<div class="form-group">
				<div class="col-sm-12">
					<select name='pref1' class='form-control'>
						<option value='-1'>Choose your 1st Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<select name='pref2' class='form-control'>
						<option value='-1'>Choose your 2nd Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<select name='pref3' class='form-control'>
						<option value='-1'>Choose your 3rd Preference</option>
						<option value='1'>Aerospace Engineering</option>
						<option value='2'>Agricultural & Food Engineering</option>
						<option value='3'>Architecture & Regional Planning</option>
						<option value='4'>Banking</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Finance</option>
						<option value='15'>Geology & Geophysics</option>
						<option value='16'>Humanities & Social Sciences</option>
						<option value='17'>Industrial & Systems Engineering</option>
						<option value='18'>Marketing</option>
						<option value='19'>Mathematics</option>
						<option value='20'>Mechanical Engineering</option>
						<option value='21'>Metallurgical & Materials Engineering</option>
						<option value='22'>Mining Engineering</option>
						<option value='23'>Music</option>
						<option value='24'>Ocean Engineering & Naval Architecture</option>
						<option value='25'>Physics</option>
					</select>
				</div>
			</div>
			<h3 class="center"> Contact Details </h3>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fphone = array('name' => 'phone',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Phone No.',
						'required' => 'required');
					echo form_input($fphone);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$firm = array('name' => 'firm',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Firm');
					echo form_input($firm);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fd = array('name' => 'des',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Designation');
					echo form_input($fd);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fw = array('name' => 'work',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Field Of Work');
					echo form_input($fw);
					?>
				</div>
			</div>

		</div>
		<div class="form-group"	>	
			<div class="col-sm-12">		
				<button   name="sub" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
			</div>			
		</div>

	</form>

</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

<script type="text/javascript">
	function f1(x){
		if(x.options[x.selectedIndex].text=="student") {
			document.getElementById("f1").style.display="block";
		}
		else {
			document.getElementById("f1").style.display="none";
		}

	}
	function f2(x){
		if(x.options[x.selectedIndex].text=="mentor") {
			document.getElementById("f2").style.display="block";
		}
		else {
			document.getElementById("f2").style.display="none";
		}

	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>


</html>
	