<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome <?php echo $name;?> </title>
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


		<!--img src="http://www.alumnimeet.iitkgp.ernet.in/other/mentorship/img/gym1.jpg" style="position:relative;top:-20px;" width="100%" height="400" class="img img-rounded" -->
		<div class="container">
			<div class="row">

				<div  class="col-md-3" >

					
					<br/>
					<br/>

					<div style="">
						<img src="http://www.alumnimeet.iitkgp.ernet.in/img/logo-square.jpg" class="img img-rounded" style="position:relative;left:20px;" width="200" height="180" /><br/><br/>
						<div class="list-group"><?php
							$query = $this->db->get_where('contact', array('email' => $email));
							$row=$query->row_array();		
							if($cgpa == ''&&!isset($_POST['update'])) {
								echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Phone Number </strong>'.'<span class="pull-right">'. $row['phone'] .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Year Of Graduation</strong>'.'<span class="pull-right">' .$passout_year .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
								//echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			

							}
							else if($cgpa != ''&&!isset($_POST['update'])){
								echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Roll Number </strong>'.'<span class="pull-right">'. $roll .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Joining Year </strong>'.'<span class="pull-right">' .$join_year .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			

							}
							$query = $this->db->get_where('users', array('email' => $email));
							$row=$query->row_array();	
							if($row['cgpa'] == ''&&isset($_POST['update'])) {
								
								echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $row['email'] .'</span>'.'</li>';
								$query = $this->db->get_where('contact', array('email' => $email));
								$row=$query->row_array();
								echo '<li class="list-group-item">'.'<strong>Phone Number </strong>'.'<span class="pull-right">'. $row['phone'] .'</span>'.'</li>';
								$query = $this->db->get_where('users', array('email' => $email));
								$row=$query->row_array();									
								echo '<li class="list-group-item">'.'<strong>Year Of Graduation</strong>'.'<span class="pull-right">' .$row['passout_year'] .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $row['department'].'</span>'.'</li>';
								//echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $row['hall'] .'</span>'.'</li>';			

							}
							else if($row['cgpa'] != ''&&isset($_POST['update'])){
								echo '<li class="list-group-item">'.'<strong>Email </strong>'.'<span class="pull-right">'. $email .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Roll Number </strong>'.'<span class="pull-right">'. $roll .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Joining Year </strong>'.'<span class="pull-right">' .$join_year .'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Department  </strong>'.'<span class="pull-right">'. $department.'</span>'.'</li>';
								echo '<li class="list-group-item">'.'<strong>Hall </strong>'.'<span class="pull-right">'. $hall .'</span>'.'</li>';			

							}
							?>
						</div>
						<button type="button" style="width:100%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit My Profile</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Edit Your Profile</h4>
									</div>
									<div class="modal-body">
										<?php
										$this->load->helper('form');
										$a = array('class'=>'form-horizontal',
											'method'=>'post',
											'role'=>'form');
										echo form_open('index.php/welcome/member_area_updated',$a);					
										?>
										<div class="form-group">
											<div class="col-md-4"><h4></h4></div>
											<div class="col-sm-8">
												<input type="hidden" class="form-control" name="eid" value='<?php echo $email;?>' placeholder='<?php echo $email;?>'  />
												
											</div>



										</div>
										<div class="form-group">
											<div class="col-md-4"><h4>Update Name</h4></div>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="name" value='<?php echo $name;?>' placeholder='<?php echo $name;?>'  />
												
											</div>



										</div>
										<div class="form-group">
											<div class="col-md-4"><h4>Update Password</h4></div>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="pass" value='<?php echo $password;?>' placeholder='<?php echo $password;?>'  />
												
											</div>

											

										</div>
										
										<div class="form-group">
											<div class="col-md-4"><h4>Update Department</h4></div>
											<div class="col-sm-8">
												<select name='department' value='<?php echo $department; ?>' class='form-control' >
													<option value='<?php echo $department; ?>'>Select Your Department</option>
													<option value="AE">Aerospace Engineering</option>
													<option value="AG">Agricultural & Food Engineering</option>
													<option value="AR">Architecture & Regional Planning</option>
													<option value="BT">Biotechnology</option>
													<option value="CE">Civil Engineering</option>
													<option value="CH">Chemical Engineering</option>
													<option value="CS">Computer Science & Engineering</option>
													<option value="CY">Chemistry</option>
													<option value="EE">Electrical Engineering</option>
													<option value="EC">Electronics & Electrical Communication Engineering</option>
													<option value="GG">Geology & Geophysics</option>
													<option value="HS">Humanities & Social Sciences</option>
													<option value="IM">Industrial & Systems Engineering</option>
													<option value="MA">Mathematics</option>
													<option value="ME">Mechanical Engineering</option>
													<option value="MT">Metallurgical & Materials Engineering</option>
													<option value="MI">Mining Engineering</option>
													<option value="NA">Ocean Engineering & Naval Architecture</option>
													<option value="PH">Physics</option>
													<option value="ATDC">Advanced Techology Development Center</option>
													<option value="CET">Center for Educational Technology</option>
													<option value=CYE"">Cryogenic Engineering</option>
													<option value="MS">Materials Science</option>
													<option value="ORALS">Oceans, Rivers, Atmosphere and Land Sciences</option>
													<option value="CBE">P K Sinha Centre for Bio Energy</option>
													<option value="REC">Reliability Engineering Centre</option>
													<option value="RTC">Rubber Technology Centre</option>
													<option value="RDC">Rural Development Centre</option>
													<option value="GSSST">G S Sanyal School of Telecommunications</option>
													<option value="IT">Information Technology</option>
													<option value="RMSEE">Rajendra Mishra School of Engineering Entrepreneurship</option>
													<option value="RGSIPL">Rajiv Gandhi School of Intellectual Property Law</option>
													<option value="MST">Medical Science & Technology</option>
													<option value="SB">School of Bioscience</option>
													<option value="SEST">School of Environment Science and Technology</option>
													<option value="SES">School of Energy Science</option>
													<option value="SNST">School of Nano-Science and Technology</option>
													<option value="SWS">School of Water Resources</option>
													<option value="VGSOM">Vinod Gupta School of Management</option>

												</select>	
												
											</div>

											

										</div>
										<div class="form-group">
											<div class="col-md-4"><h4>Update Phone</h4></div>
											<div class="col-sm-8">
												<?php	$query = $this->db->get_where('contact', array('email' => $email));
												$row=$query->row_array();	?>
												<input type="text" class="form-control" name="phone" value='<?php echo $row['phone'];?>' placeholder='<?php echo $row['phone'];?>'  />
												
											</div>

											

										</div>
										<div id='1' style="display:none;" >
										<div class="form-group" >
											<div class="col-md-4"><h4>Update Your Roll </h4></div>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="roll" value='<?php echo $roll;?>' placeholder='<?php echo $roll;?>'  />
												
											</div>

											

										</div>
										<div class="form-group" >
											<div class="col-md-4"><h4>Update Hall</h4></div>
											<div class="col-sm-8">
												<select name='hall' value='<?php echo $hall;?>' class='form-control'>
													<option value='<?php echo $hall;?>'>Select Your Hall</option>
													<option value="SAM">Ashutosh Mukherjee  Hall</option>
													<option value="AZ">Azad  Hall</option>
													<option value="BCR">B C Roy  Hall</option>
													<option value="BRAH">B R Ambedkar  Hall</option>
													<option value="GH">Gokhale  Hall</option>
													<option value="HJB">Homi Bhabha  Hall</option>
													<option value="JCB">J C Bose  Hall</option>
													<option value="LLR">Lala Lajpat Rai  Hall</option>
													<option value="LBS">Lalbahadur Sastry  Hall</option>
													<option value="MMM">Madan Mohan Malviya  Hall</option>
													<option value="MS">Megnad Saha  Hall</option>
													<option value="MT">Mother Teresa  Hall</option>
													<option value="NH">Nehru  Hall</option>
													<option value="PT">Patel  Hall</option>
													<option value="RK">Radha Krishnan  Hall</option>
													<option value="RP">Rajendra Prasad  Hall</option>
													<option value="RLB">Rani Laxmibai  Hall</option>
													<option value="SN">Sarojini Naidu / Indira Gandhi  Hall</option>
													<option value="VS">Vidyasagar  Hall</option>
													<option value="ZH">Zakir Hussain  Hall</option>
												</select>					
												
											</div>

											

										</div>
										<div class="form-group" >
											<div class="col-md-4"><h4>Update Cgpa</h4></div>
											<div class="col-sm-8">
												<input type="text"  name ="cgpa" class="form-control" value='<?php echo $cgpa;?>' placeholder='<?php echo $cgpa;?>'  />
												
											</div>

											

										</div>
										<div class="form-group" >
											<div class="col-md-4"><h4>Update Current Year</h4></div>
											<div class="col-sm-8">
												<input type="text" name="current" class="form-control" value='<?php echo $current_acad_year;?>' placeholder='<?php echo $current_acad_year;?>'  />
												
											</div>

											

										</div>

										</div>
										

										<div class="form-group"	>	
											<div class="col-sm-12">		
												<button   name="update" style="width:100%;" class="btn btn-lg btn-success" >Submit</button>		
											</div>			
										</div>

									</form>
								</div>
								<div class="modal-footer">
									<button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
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
						Thank you for registering! We will allot a  <?php if($cgpa == ''){ echo  "Mentee" ;} 
						else { echo "Mentor"  ; }?> to you soon.
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
			<?php 
			if($cgpa=='')
			{
				$id=0;
			}
			else
			{
				$id=1;
			}
			?>
		</div>
	</div>
</div>

<?php echo $id;?>
<footer style="background-color:black; color:white; text-align:center; padding:10px; position:absolute; bottom:0px; width:100%">&copy; Students' Alumni Cell</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
<script type="text/javascript">
 if(<?php echo $id;?>===1){
	document.getElementById('1').style.display="block";}
	else{
		document.getElementById('1').style.display="none";
	}

</script>
</body>
</html>
