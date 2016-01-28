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
		<h2 style="text-align:center">Welcome To Mentorship Portal  </h2>
		<div >

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
					<?php 
					$fpref1 = array('name' => 'pref1',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 1st Preference');
					echo form_input($fpref1);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpref2 = array('name' => 'pref2',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 2nd Preference');
					echo form_input($fpref2);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpref3 = array('name' => 'pref3',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 3rd Preference');
					echo form_input($fpref3);
					?>
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
					<?php 
					$option = array('1' => 'one',
						'2' => 'two',
						'3' => 'three',
						'4' => 'four');
					echo form_dropdown('mentee',$option,'1');
					?>
				</div>
			</div>
			<h4>In which field do you want to Mentor in?</h4>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpref1 = array('name' => 'pref1',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 1st Preference');
					echo form_input($fpref1);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpref2 = array('name' => 'pref2',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 2nd Preference');
					echo form_input($fpref2);
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpref3 = array('name' => 'pref3',
						'class' => 'form-control',
						'placeholder' => 'Enter Your 3rd Preference');
					echo form_input($fpref3);
					?>
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


</body>


</html>
