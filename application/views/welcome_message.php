<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Mentorship-Portal</title>
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

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Login Here</h4>
					</div>
					<div class="modal-body">
						<?php 
						$this->load->helper('form');
						$for=array('class' => 'form-horizontal',
							'method' => 'post',
							'role' => 'form',

							);		
						echo form_open('welcome/member_area',$for);
						?>
						<div class="form-group">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<?php
								$email1 = array('name' => 'eid' ,
									'type' => 'email',
									'class' => 'form-control',
									'placeholder' => 'Enter Your Email' );
								echo form_input($email1);
								?>

							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<?php
								$pwd = array('name' => 'pass' ,
									'type' => 'password',
									'class' => 'form-control',
									'placeholder' => 'Enter Your Password' );
								echo form_input($pwd);
								?>

							</div>
						</div>


						<button type="submit" style="position:relative;left:100px;width:370px;" class="btn btn-success">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

		<!--div style="float:right;margin-top:-10px;">
 
	</div-->
	<div class="jumbotron" style="margin-top:-30px;">
		<img src="img/p.png" style="float:left;" width="100" height="100">
		<h2 style="text-align:center">Welcome To Mentorship Portal  </h2>
		<button type="button" style="float:right;position:relative;top:-45px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

	</div>
	<div class="col-md-6">
		<img src="img/m.png" style="margin-top:100px;" width="480" height="150" />
	</div>
	<div class="col-md-6">

		<h2 style="text-align:center;">Register Here</h2>
		<?php
		$this->load->helper('form');
		$a = array('class'=>'form-horizontal',
			'method'=>'post',
			'role'=>'form');
		echo form_open('welcome/users',$a);					
		?>
		<div class="form-group">
			<div class="col-sm-12">
				<?php
				$fname = array('name' => 'name' ,
					'class' => 'form-control',
					'placeholder' => 'Enter Your Name' );
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
					'placeholder' => 'Enter Your Email' );
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
					'type' => 'password' );
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
					'placeholder' => 'Enter Your Department' );
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

		</div> <h4>Choose Your Category(Mentor/Student)</h4>
		<select name="select" class="form-control" onchange="f1(this);f2(this);">
			<option>---</option>
			<option>mentor</option>
			<option>student</option>

		</select><br/>
		<div id="f1" style="display:none">
			<div class="form-group">
				<div class="col-sm-12">
					<?php
					$froll = array('name' => 'roll' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Roll' );
					echo form_input($froll);
					?>
				</div>



			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php
					$fcg = array('name' => 'cgpa' ,
						'class' => 'form-control',
						'placeholder' => 'Enter Your Cgpa' );
					echo form_input($fcg);
					?>
				</div>



			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fcad = array('name' => 'current',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Current Academic Year');
					echo form_input($fcad);
					?>
				</div>

			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fjoin = array('name' => 'join',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Joining Year');
					echo form_input($fjoin);
					?>
				</div>
			</div>
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
		</div>
		<div id="f2" style="display:none">
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpasout = array('name' => 'pout',
						'class' => 'form-control',
						'placeholder' => 'Enter Your PassOut Year');
					echo form_input($fpasout);
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-3">
					<h5>Select No. Of Mentees</h5>
				</div>
				<div class="col-sm-4">
					<select class="form-control" name="no_of_mentees">
						<option value='-1'>Choose no of Mentees to be allotted</option>
						<option value='1'>One</option>
						<option value='2'>Two</option>
						<option value='3'>Three</option>
						<option value='4'>Four</option>
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
						'placeholder' => 'Enter Your Phone No.');
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
