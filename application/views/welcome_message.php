<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Mentorship-Portal</title>
	<link rel='stylesheet' href='http://www.mentorship.iitkgp.ernet.in/css/social_icon.css'>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }
		#bg {
			height: 400px;
			width: 100%;
			background-image: url('http://www.mentorship.iitkgp.ernet.in/img/gym1.jpg');
			background-size:100% 100%;
		}
		#nav {
			position: relative;
			top: 20px;

		} 
		#quotes {
			width: 60px;
			height: 60px;
		}
		#box {
			padding: 10px;
			width: 100%;
			background:rgba(0,0,0,.5);
			position: absolute;
			top:0px;
			margin:0px auto;
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
		div.al {
			padding: 10px;
			background:rgba(255,255,255,.75);
			position: relative;
			margin:2px auto;
			text-align:justify;
			box-shadow: 0px 0px 15px #777;
			border-radius:7px; 
		}
		div.all {
			padding: 10px;
			background:rgba(255,255,255,.75);
			position: relative;
			margin:2px auto;
			text-align:justify;
			box-shadow: 0px 0px 10px #777; 
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
		.jumbotron {
			text-align: center;
			background-color: transparent;
		}
		.container a{
			color: black;
		}
		.collapse {
			text-align: justify;
		}
		.well {
			/*background-color: transparent;*/
		}
		.list-group-item {
			/*background-color: transparent;*/
		}
		#menu3 {
			background-color: orange;
			border-radius:10px; 
		}
		.abc {
			text-align: center;
			min-height: 670px;

		}
		.abc a {
			text-decoration: none;
			color: white;
			opacity:;

		}
		.abc hr{			
			color: black;
			opacity: 0.8;
		} 	
	</style>
</head>
<body>
	
	<div id="bg">
		<div id="nav">

		</div>
		<div class="row" id="box" style="width:100%;float:right;margin-top:0px">
			<div class="col-md-4"></div>
			<?php 
			$this->load->helper('form');
			$for=array('class' => 'form-horizontal',

				'method' => 'post',
				'role' => 'form',
				);		
			echo form_open('/index.php/welcome/member_area',$for);
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
			<button type="button" class="btn btn-primary btn-lg" name="add" data-toggle="modal" data-target="#registermentor">
				I want to be a Mentor
			</button>
			<br><hr><br>
			<button type="button" class="btn btn-primary btn-lg" name="add" data-toggle="modal" data-target="#registerstudent">
				I want to be a Mentee
			</button>
		</div>
		<div class="col-md-7" style="position:relative;left:25px;">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">About Mentorship Program</a></li>
				<li><a data-toggle="tab" href="#menu1">Why choose this program</a></li>
				<li><a data-toggle="tab" href="#menu2">Testimonials</a></li>
				<li><a data-toggle="tab" href="#menu3">FAQs</a></li>
				<li><a data-toggle="tab" href="#menu4">Contact Us</a></li>
			</ul>
			<br>
			<div class="tab-content" style="width:100%">
				<div id="home" class="tab-pane fade in active">
					<img src="http://www.mentorship.iitkgp.ernet.in/img/p.jpg" style="position:relative;" width="100%" height="100" class="img img-rounded" />
					<br/><br/>
					<div class ="all">
						The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell as an initiative to create a platform for the exchange of ideas and experience between the alumni and the current students of IIT Kharagpur.<br><br>
						With an ocean of possibilities available, students often find it difficult to decide their way out into the future. There are lots of instances where students need  a mentor who can counsel and guide them through. The alumni can improve students' insight into various aspects of life.  Their journey and personal experiences can help the students and motivate them through this pivotal phase of life. Under this programme, we invite our alumni from across the world and from different fields to interact with the students and help them build their network and gain new perspective on the possibilities open to them after graduation.
					</div>
				</div>

				<!-- Add tabs here-->
				<div id="menu1" class="tab-pane fade">
					<div class ="al">
						<h3  style="text-align:center;background-color:	#7FFFD4;color:white;border-radius:8px;">For Mentors</h3>
						<p>As a successful member of the IIT Kharagpur alumni community, you have the power to inspire, motivate, and support IIT KGP students. Your knowledge, experience, and insight will help students open their eyes to the opportunities and challenges they will face after graduation.

							When you serve as a mentor, you form meaningful, rewarding relationships that prepare students to be better employees and leaders, inspire them to stay connected with IIT Kharagpur, and motivate them to support the next generation of students. Mentors help perpetuate, grow, and strengthen IIT Kharagpur’s global alumni network.
						</p>
						<h3 style="text-align:center;background-color:	#7FFFD4;color:white;border-radius:8px;">For Mentees</h3>
						<p>Mentees can expect to receive guidance to help them navigate various career options, learn invaluable skills for professional development and make new contacts expand their network.

							Mentors and students form supportive relationships built on the shared experience of the KGP way of life, and connect one-on-one in a relaxed, informal way. It’s a valuable relationship that serves as an important complement to your classroom and action learning experiences, and makes for a richer KGP experience.
						</p>
					</div>
				</div>
				<div id="menu2" class="tab-pane fade">
					<div class ="al">
						<div class="row" >
							<div class="col-md-8" style="background-color:;">
								<img src="http://www.mentorship.iitkgp.ernet.in/img/a.png" alt="" id="quotes" />

								<p>    Mentorship is crucial for any individual whether a student or professional, and its importance is essential especially during the formative years in college. I signed up for this program with the objective to gain perspective and seek help from our experienced and extremely friendly alumni. His guidance helped me think and understand about the outside world, gain industry knowledge and valuable fundas which helped me perform well in college and outside. They know what is valued more when it comes to the professional world, hence I always prioritized my mentors advice - specifically maintaining a good CGPA. Interacting and keeping in touch with my mentor also helped improving my networking skills and connecting to more people.   
									<br>
									<img src="http://www.mentorship.iitkgp.ernet.in/img/b.png" alt="" id="quotes" class="pull-right" />

									
								</p>
							</div>
							
							<div class="col-md-4" >	<br><br><img src="http://www.mentorship.iitkgp.ernet.in/img/t2.jpg" class="img img-circle" width="100%" height="80%">
								<br><br><br>	<b style="position:relative;left:60px;">Ankit Gupta</b>
							</div>
						</div><hr>
						<div class="row">
							<div class="col-md-8">
								<img src="http://www.mentorship.iitkgp.ernet.in/img/a.png" alt="" id="quotes" />
								<p>      The Alumni Student mentorship program is a nice initiative by the Students’ Alumni Cell. In today’s time a direction and support from an esteemed mentor can go a long way in helping someone. It was a great experience for me as I got to learn a lot from my mentor who provided me with insight into the world after college as well as their experience as a student and in the professional sphere. Getting mentorship from an Alumni is a great thing as they can provide better help as they have been a part of the same institution as you."
									<br>
									<img src="http://www.mentorship.iitkgp.ernet.in/img/b.png" alt="" id="quotes" class="pull-right" />

									
								</p></div>
								
								<div class="col-md-4"><br><img src="http://www.mentorship.iitkgp.ernet.in/img/t3.jpg" class="img img-circle" width="100%" height="80%"><br><br><b style="position:relative;left:60px;">Pranshu Agrawal</b></div>
							</div><hr>
							<div class="row">
								<div class="col-md-8">
									<img src="http://www.mentorship.iitkgp.ernet.in/img/a.png" alt="" id="quotes" />
									<p>The Student Alumni Mentorship Programme is probably one of the best
										initiatives taken by our institution in recent years. Through my
										association with it, I can only say that although the path was clear for
										me, it was dark. My mentor came in the form a torchlight.
										<br>
										<img src="http://www.mentorship.iitkgp.ernet.in/img/b.png" alt="" id="quotes" class="pull-right" />	
									</p>
								</div>
								
								<div class="col-md-4"><img src="http://www.mentorship.iitkgp.ernet.in/img/t1.jpg" class="img img-circle" width="100%" height="80%"><br><br><b style="position:relative;left:60px;">Gobind Singh</b></div>
							</p>
						</div>
					</div>
				</div>
				<div id="menu3" class="tab-pane fade">
					<div class="abc">
						<div class="jumbotron" >
							<!-- <h1>StaticPages#testimonial</h1> -->
							<h1 style="color:white;">Frequently Asked Questions</h1>
							<p style="opacity:.75;">Here are questions people who are new to Mentorship Programme often have. We're here to help you.</p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="">
									<a href="#collapseOne" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
										Who is an Alumni Mentor?
									</a>

									<hr style="color:black;opacity:0.8;">

									<div class="collapse well" id="collapseOne">
										As an Alumni Mentor you are a guide, friend and resource who shares your Kgp education and professional experience to help pave the way for current students to succeed at Kgp and beyond. A Kgp Alumni Mentor derives satisfaction from helping Kgp students fulfill their potential.<br>

									</div>
								</div>

								<div class="">
									<a href="#collapseTwo" data-toggle="collapse" aria-controls="collapseTwo" aria-expanded="false">
										How Will I Benefit as a Mentor?
									</a>

									<hr>

									<div class="well collapse" id="collapseTwo">
										We believe that mentoring will be a positive and enriching experience for you. Specifically, we hope you will:

										Refine your coaching and mentoring skills 
										Develop meaningful connections with students 

										Learn about the Kgp of today and the next generation<hr>

										Experience a reconnection with your Alma Mater
									</div>
								</div><!--Container12 Ends -->

								<div class="">
									<a href="#collapseThree" data-toggle="collapse" aria-controls="collapseThree" aria-expanded="false">
										How will the Mentee Benefit?
									</a>

									<hr>

									<div class="well collapse" id="collapseThree">
										Following are some general ways we hope the students will benefit from being in a mentoring relationship:
										<div class="list-group">
											<li class="list-group-item">
												•	Build a professional network 
											</li>
											<li class="list-group-item">
												•	Develop and enhance professional and communication skills 
											</li>
											<li class="list-group-item">
												•	Connect academics and career; acquire advice on experiences and courses that would be of greatest benefit 
											</li>
											<li class="list-group-item">
												•	Explore new ideas and areas of interest 
											</li>
											<li class="list-group-item">
												•	Gain exposure to career options, advice and job search tips 
											</li>
										</div><!--list-group-item ends -->
									</div>
								</div><!--container13 ends -->

								<div>
									<a href="#oneFour" data-toggle="collapse" aria-controls="oneFour" aria-expanded="false">
										Role of A Mentor?
									</a>
									<hr>
									<div class="well collapse" id="oneFour">
										<div class="list-group">
											<li class="list-group-item">
												<span class="label label-primary">Motivator:</span> 
												Expresses belief and confidence in the mentee’s abilities, and encourages the mentee to try new things.
											</li>
											<li class="list-group-item">
												<span class="label label-info">Resource:</span>
												Teaches and advises the mentee on how to make professional contacts, and introduces the mentee to new ideas and own experiences.
											</li>
											<li class="list-group-item">
												<span class="label label-primary">Supporter:</span>
												Encourages open and honest dialogue, and listens to and responds to the needs of the mentee.
											</li>
											<li class="list-group-item">
												<span class="label label-success">Coach:</span>
												Helps the mentee develop, and work to achieve, realistic and meaningful goals.
											</li>
										</div><!--list-group ends -->
									</div>
								</div><!--container14 ends -->

							</div><!--col-md-6 ends -->

							<div class="col-md-6">
								<div class="">
									<a href="#collapseFour" data-toggle="collapse" aria-controls="collapseFour" aria-expanded="false">
										What is Expected of the Mentee?
									</a>
									<hr>
									<div class="well collapse" id="collapseFour">
										Before a student can search for a mentor, they must attend a mandatory orientation in which they are instructed to think about what they want out of a mentoring relationship. They are informed of our expectations, which include:
										<div class="list-group">
											<li class="list-group-item">
												•	Spend at least two hours per month building the mentoring relationship 
											</li>
											<li class="list-group-item">
												•	Make the first contact with the selected mentor and respond to all communication 
											</li>
											<li class="list-group-item">
												•	Set specific goals for the mentoring relationship with mentor 
											</li>
											<li class="list-group-item">
												•	Agree and commit to expectations and goals set with the mentor 
											</li>
											<li class="list-group-item">
												•	Be appropriate in their requests of their mentor, in particular, in NOT asking for a job or sponsorship
											</li>
											<li class="list-group-item">
												•	Approach the mentoring relationship with an open mind, professionalism and respect 
											</li>
										</div>
										<footer>Be receptive to suggestions and feedback</footer>
									</div>
								</div><!--container21 ends -->

								<div class="">
									<a href="#collapseFive" data-toggle="collapse" aria-controls="collapseFive" aria-expanded="false">
										The Matching process
									</a>
									<hr>
									<div class="well collapse" id="collapseFive">
										<div class="list-group">
											<li class="list-group-item">
												•	Both the mentee and the mentor register for the program through an online form .
											</li>
											<li class="list-group-item">
												•	Based on the preferences filled in the form and factors like place, year and grades, Mentors are allotted to the mentees on the basis of a predefined code.
											</li>
											<li class="list-group-item">
												•	There can be situations where the mentor is not allotted any mentee or vice versa due to the preferences made, in such a case the mentor would be notified through an email and the allotment shall then be done manually.
											</li>
										</div>
									</div>
								</div><!--container22 ends -->

								<div class="">
									<a href="#collapseSixth" data-toggle="collapse" aria-controls="collapseSixth" aria-expanded="false">
										<!-- ONCE A MATCH IS MADE -->Once a Match is made
									</a>
									<hr>
									<div class="well collapse" id="collapseSixth">
										<div class="list-group">
											<li class="list-group-item">
												•	We advise you to connect with your mentee through social networking platforms.
											</li>
											<li class="list-group-item">
												•	Have few informal sessions with your mentee for ice breaking.
											</li>
											<li class="list-group-item">
												•	If the mentee does not respond to your conversations do write to us.
											</li>
											<li class="list-group-item">
												•	Your feedback is our prime critic, do respond to our feedback forms to make this program a success.
											</li>
										</div>
									</div>
								</div><!--container23 -->

								<div>
									<a href="#twoFour" data-toggle="collapse" aria-controls="twoFour" aria-expanded="false">
										The Mentoring Relationship
									</a>
									<hr>
									<div class="well collapse" id="twoFour">
										For mentoring to be successful there must be a reciprocal and comfortable relationship between the mentor and the mentee. Both parties must work to make the relationship successful by being open-minded, respectful and keeping to the expectations they have set for the relationship. Ideally, the mentor-mentee relationship will be a mutually beneficial one, as the mentor learns from the mentee and the mentee from the mentor.
									</div>
								</div><!--container24 ends -->
							</div><!--col-md-6 ends -->
						</div>

					</div>
				</div>
				<div id="menu4" class="tab-pane fade">
					<div class ="al">
						<div class="">
	<!-- <div class="jumbotron">
		<h1>StaticPages#contact</h1>
		<p>Find me in app/views/static_pages/contact.html.erb</p>
	</div> -->

	<div class="jumbotron" align="center">
		<h2>Students' Alumni Cell</h2>
		<h3>Office of Alumni Affairs & International Relations</h3>
		<p>Indian Institute of Technology, Kharagpur</p>
		<p>West Bengal, India. Pin :- 721302</p>
		<!-- <p>Email: aao@hijli.iitkgp.ernet.in</p> -->
		<p>Phone: +91-3222-281860</p>
		<!-- <p>Email: mentorship@adm.iitkgp.ernet.in</p> -->
		<p>In case of any suggestions or query please feel free to write to us at <a href="mailto: mentorship@adm.iitkgp.ernet.in">mentorship@adm.iitkgp.ernet.in</a></p>
	</div>

	<div class="" style="text-align:center;">
		<a href="http://alumnimeet.iitkgp.ernet.in/contact.php" class="btn btn-success btn-block">
			View Complete Team
		</a>
	</div>
	<br/>
	<div class="row" style="position:relative;left:20px;font:bold 15px Calibri; text-align:center">
		Pranshu Jain<br>pranshu.iitkgp@gmail.com <br>+919800189955 
	</div>
	<div class="row">

		<div class="col-md-3" style="font:bold 15px Calibri; text-align:center">
			Akash Tulsani<br>akashtulsani08@gmail.com<br>+918967681614</div>
			
			<div class="col-md-5"></div>
			<div class="col-md-3" style="position:relative;left:70px;font:bold 15px Calibri; text-align:center">
				Sanket <br> sanket0495@gmail.com<br>+918609267395</div>	
			</div>
	<!-- <div class="container">
		<h2>Students' Alumni Cell</h2>
		<h3>Office of Alumni Affairs & International Relations</h3>
		<p>Indian Institute of Technology, Kharagpur</p>
		<p>West Bengal, India. Pin :- 721302</p>
		<p>Email: mentorship@adm.iitkgp.ernet.in</p>
		<p>Email: aao@hijli.iitkgp.ernet.in</p>
		<p>Phone: +91-3222-281860</p>
	</div> -->
</div>
</div>
</div>


</div>
</div>

</div>
</div>
<br>
<footer style="background-color:black; color:white; text-align:center; padding:10px; position:relative; bottom:0px; width:100%">&copy; Students' Alumni Cell
<ul class="soc">
	<li><a class="soc-facebook"  href="//www.facebook.com/iitkgp.alumnicell?fref=ts&ref=br_tf" target="_blank"></a></li>
	<li><a class="soc-twitter"   href="//twitter.com/IITKgpAlumni"target="_blank"></a></li>
	<li><a class="soc-linkedin"  href="//www.linkedin.com/edu/school?id=13500&trk=prof-following-school-logo"target="_blank"></a></li>
	<li><a class="soc-wikipedia" href=""target="_blank"></a></li>
	<li><a class="soc-youtube soc-icon-last" href="//www.youtube.com/channel/UCtnSs1CT59Rd8L6VlOAxzRA"target="_blank"></a></li>
</ul>
</footer>
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
				echo form_open('/index.php/welcome/users',$a);					
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
							'placeholder' => 'Enter Your Password',
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
				<select name='department' class='form-control' >
					<option value='0'>Select Your Department</option>
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
			<div class="col-sm-12">
				<select name='hall' class='form-control'>
					<option value='0'>Select Your Hall</option>
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
		<div id="">
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
						'type' => 'text',
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
						<option value='4'>Banking & Finance</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Management Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Geology & Geophysics</option>
						<option value='15'>Humanities & Social Sciences</option>
						<option value='16'>Industrial & Systems Engineering</option>
						<option value='17'>Mathematics</option>
						<option value='18'>Mechanical Engineering</option>
						<option value='19'>Metallurgical & Materials Engineering</option>
						<option value='20'>Mining Engineering</option>
						<option value='21'>Ocean Engineering & Naval Architecture</option>
						<option value='22'>Physics</option>
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
						<option value='4'>Banking & Finance</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Management Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Geology & Geophysics</option>
						<option value='15'>Humanities & Social Sciences</option>
						<option value='16'>Industrial & Systems Engineering</option>
						<option value='17'>Mathematics</option>
						<option value='18'>Mechanical Engineering</option>
						<option value='19'>Metallurgical & Materials Engineering</option>
						<option value='20'>Mining Engineering</option>
						<option value='21'>Ocean Engineering & Naval Architecture</option>
						<option value='22'>Physics</option>
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
						<option value='4'>Banking & Finance</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Management Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Geology & Geophysics</option>
						<option value='15'>Humanities & Social Sciences</option>
						<option value='16'>Industrial & Systems Engineering</option>
						<option value='17'>Mathematics</option>
						<option value='18'>Mechanical Engineering</option>
						<option value='19'>Metallurgical & Materials Engineering</option>
						<option value='20'>Mining Engineering</option>
						<option value='21'>Ocean Engineering & Naval Architecture</option>
						<option value='22'>Physics</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="form-group"	>	
			<div class="col-sm-12">		
				<button   name="sub1" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
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
				echo form_open('/index.php/welcome/users',$a);					
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
							'placeholder' => 'Enter Your Password',
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
				<select name='department' class='form-control'>
					<option value='0'>Select Your Department</option>
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
					<option value="CYE">Cryogenic Engineering</option>
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

		<div id="f2" style="">
			<div class="form-group">
				<div class="col-sm-12">
					<?php 
					$fpasout = array('name' => 'pout',
						'class' => 'form-control',
						'placeholder' => 'Enter Your Year Of Graduation',
						'required' => 'required');
					echo form_input($fpasout);
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-3">
					<h5>Preferred No. Of Mentees</h5>
				</div>
				<div class="col-sm-4">
					<select name='mentee' class="form-control">
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
						<option value='4'>Banking & Finance</option>
						<option value='5'>Biotechnology</option>
						<option value='6'>Civil Engineering</option>
						<option value='7'>Chemical Engineering</option>
						<option value='8'>Civil Services</option>
						<option value='9'>Computer Science & Engineering</option>
						<option value='10'>Management Consultancy</option>
						<option value='11'>Chemistry</option>
						<option value='12'>Electrical Engineering</option>
						<option value='13'>Electronics & Electrical Communication Engineering</option>
						<option value='14'>Geology & Geophysics</option>
						<option value='15'>Humanities & Social Sciences</option>
						<option value='16'>Industrial & Systems Engineering</option>
						<option value='17'>Mathematics</option>
						<option value='18'>Mechanical Engineering</option>
						<option value='19'>Metallurgical & Materials Engineering</option>
						<option value='20'>Mining Engineering</option>
						<option value='21'>Ocean Engineering & Naval Architecture</option>
						<option value='22'>Physics</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<select  onchange="f1(this)" class='form-control'>
						<option value='-1'>Do You Want More Preferences</option>
						<option >Yes</option>
						<option>No</option>
					</select>
				</div>
			</div>
			
			
			<div id="f1" style="display:none;">
				<div class="form-group">
					<div class="col-sm-12">
						<select name='pref2' class='form-control'>
							<option value='-1'>Choose your 2nd Preference</option>
							<option value='1'>Aerospace Engineering</option>
							<option value='2'>Agricultural & Food Engineering</option>
							<option value='3'>Architecture & Regional Planning</option>
							<option value='4'>Banking & Finance</option>
							<option value='5'>Biotechnology</option>
							<option value='6'>Civil Engineering</option>
							<option value='7'>Chemical Engineering</option>
							<option value='8'>Civil Services</option>
							<option value='9'>Computer Science & Engineering</option>
							<option value='10'>Management Consultancy</option>
							<option value='11'>Chemistry</option>
							<option value='12'>Electrical Engineering</option>
							<option value='13'>Electronics & Electrical Communication Engineering</option>
							<option value='14'>Geology & Geophysics</option>
							<option value='15'>Humanities & Social Sciences</option>
							<option value='16'>Industrial & Systems Engineering</option>
							<option value='17'>Mathematics</option>
							<option value='18'>Mechanical Engineering</option>
							<option value='19'>Metallurgical & Materials Engineering</option>
							<option value='20'>Mining Engineering</option>
							<option value='21'>Ocean Engineering & Naval Architecture</option>
							<option value='22'>Physics</option>
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
							<option value='4'>Banking & Finance</option>
							<option value='5'>Biotechnology</option>
							<option value='6'>Civil Engineering</option>
							<option value='7'>Chemical Engineering</option>
							<option value='8'>Civil Services</option>
							<option value='9'>Computer Science & Engineering</option>
							<option value='10'>Management Consultancy</option>
							<option value='11'>Chemistry</option>
							<option value='12'>Electrical Engineering</option>
							<option value='13'>Electronics & Electrical Communication Engineering</option>
							<option value='14'>Geology & Geophysics</option>
							<option value='15'>Humanities & Social Sciences</option>
							<option value='16'>Industrial & Systems Engineering</option>
							<option value='17'>Mathematics</option>
							<option value='18'>Mechanical Engineering</option>
							<option value='19'>Metallurgical & Materials Engineering</option>
							<option value='20'>Mining Engineering</option>
							<option value='21'>Ocean Engineering & Naval Architecture</option>
							<option value='22'>Physics</option>
						</select>
					</div>
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
						'placeholder' => 'Enter Your Organisation');
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


		</div>
		<div class="form-group"	>	
			<div class="col-sm-12">		
				<button   name="sub2" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
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

<?php
if(isset($_GET['err'])) {
	if($_GET['err']=='user') {
		echo "<script> alert('Incorrect Username'); </script>";
	}
	else if($_GET['err']=='pass') {
		echo "<script> alert('Incorrect Password'); </script>";
	}
}
?>

<script type="text/javascript">
	function f1(x){
		if(x.options[x.selectedIndex].text=="Yes") {
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
