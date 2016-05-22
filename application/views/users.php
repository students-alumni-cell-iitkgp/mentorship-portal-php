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
		.marquee {
			width: 100%;
			overflow: hidden;
			padding: 20px 0px;
		}
			body {
			background-image: url('/img/bg.jpg');
		}
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
				<img src="/img/hand.jpg" class="img img-rounded" height="40">
				
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


	<!--img src="/img/gym1.jpg" style="position:relative;top:-20px;" width="100%" height="400" class="img img-rounded" -->
	<div class="container">
		<div class="row">

			<div  class="col-md-3" >


				<br/>
				<br/>

				<div style="">
					<img src="/img/user.png" class="img img-rounded" style="position:relative;left:20px;" width="200" height="180" /><br/><br/>
					<div class="list-group" style="width:115%"><?php
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
									echo form_open('/index.php/welcome/member_area_updated',$a);					
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

		<div class="col-md-6" style="position:relative;left:20px;">
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

	<div class="col-md-3" id="Demo" >
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
	</div>
</div>
<div class="" >


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


<footer style="background-color:black; color:white; text-align:center; padding:10px; position:fixed; bottom:0px; width:100%">&copy; Students' Alumni Cell</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
<script type="text/javascript">
	if(<?php echo $id;?>===1){
		document.getElementById('1').style.display="block";}
		else{
			document.getElementById('1').style.display="none";
		}

	</script>
	<script>
//proporcional speed counter (for responsive/fluid use)
var widths = $('.marquee').width()
var duration = widths * 56;

$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration:5000, // for responsive/fluid use
    //duration: 8000000, // for fixed container
    //gap in pixels between the tickers
    gap: $('.marquee').width(),
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'up',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true
});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type='text/javascript' src='http://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js'></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/dw_con_scroller.js" type="text/javascript"></script>
</body>
</html>
