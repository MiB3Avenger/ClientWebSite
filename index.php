<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SPIRIT</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
		<!--fonts-->
		<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		<!--//fonts-->
	</head>
	<body>
		<!-- header -->
		<div class="banner-top">
			<div class="contact-bnr-w3-agile">
				<ul>
					<div class="search">
						<input class="search_box" type="checkbox" id="search_box">
						<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
						<div class="search_form">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder=" " required=" " />
								<input type="submit" value="Search">
							</form>
						</div>
					</div>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">SPIRIT<span></span><p class="logo_w3l_agile_caption">Learn to Live</p></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--iris">
							<ul class="nav navbar-nav menu__list">
								<li class="menu__item menu__item--current"><a href="#index" class="menu__link">Home</a></li>
								<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
								<li class="menu__item"><a href="#services" class="menu__link scroll">Services</a></li>
								<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
								<li class="menu__item"><a href="#client" class="menu__link scroll">Clients</a></li>
								<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!-- //header -->
		<!-- banner -->
		<div id="home" class="w3ls-banner" id="index">
			<!-- banner-text -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
				    <li>
	            <div class="w3layouts-banner-top w3layouts-banner-top2">
	              <div class="container">
	                <div class="agileits-banner-info">
	                  <h4>SPIRIT</h4>
	                  <h3>Your Corporate Trainer</h3>
	                  <div class="agileits_w3layouts_more menu__item">
	                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal2">Learn More</a>
	                  </div>
	                </div>
	              </div>
	            </div>
						</li>
						<li>
							<div class="w3layouts-banner-top">
								<div class="container">
									<div class="agileits-banner-info">
										<h4>SPIRIT</h4>
										<h3>Measure your progress </h3>
										<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top1">
								<div class="container">
									<div class="agileits-banner-info">
										<h4>SPIRIT</h4>
										<h3>Predict Your performance</h3>
										<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal1">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!--banner Slider starts Here-->
				<div class="thim-click-to-bottom">
					<a href="#about" class="scroll">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- //banner -->
		<!--//Header-->
		<!-- //Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<!-- Modal -->
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4>SPIRIT<span></span></h4>
						<img src="images/learn.jpg" alt=" " class="img-responsive">
						<h5>Measure your progress</h5>
						<p>Identify Parameters</p>
						<p>Quantify Progress</p>
            <p>Measure Clarity of Thoughts</p>
            <p>Measure Efficiency in Action</p>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal -->
		<!-- //Modal1 -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
			<!-- Modal1 -->
      <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>SPIRIT<span></span></h4>
            <img src="images/learn1.jpg" alt=" " class="img-responsive">
            <h5>Predict your performance</h5>
            <p>Psychometric Assesment </p>
						<p>Pre Training Assesment</p>
						<p>Post Training Assesment</p>
            <p>360&#176;  Assesment</p>
          </div>
        </div>
		  </div>
		</div>
		<!-- //Modal1 -->
		<!-- //Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<!-- Modal2 -->
			<div class="modal-dialog">
	      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>SPIRIT<span></span></h4>
            <img src="images/learn2.jpg" alt=" " class="img-responsive">
            <h5>Learning and Development</h5>
            <p>Team Building</p>
						<p>Communication</p>
						<p>Leadership</p>
            <p>Time Managment</p>
						<p>Conflict Management
						<p>Change Management</p>
            <p>Stress Management</p>
						<p>Emotion Regulation</p>
						<p>Energy Management</p>
						<p>Thought Management</p>
          </div>
        </div>
      </div>
		</div>
		<!-- //Modal2 -->
		<!-- /about -->
	 	<div class="about-wthree" id="about">
			<div class="container">
				<div class="ab-w3l-spa">
					<h3 class="title-w3-agileits title-black-wthree">About SPIRIT</h3>
					<p class="about-para-w3ls">SPIRIT aims to strive for ORGANISATIONAL EXCELLENCE and commits to contribute for the same by widening the horizons of LEARNING AND DEVELOPMENT.</p>
					<p class="about-para-w3ls">SPIRIT excels in diagnosing ORGANISATIONAL NEEDS essential to meet their Goals and provids CUSTOMISED TRAINING SOLUTIONS with equally EFFECTIVE IMPLEMENTATION METHODOLOGIES.</p>
					<p class="about-para-w3ls">SPIRIT follows and maintains a diligent approach of BUILDING ON THE BASICS. This fundamental and RESULT ORIANTED APPROCH involves focusing on performance and integrating organisational efforts by ALIGNING INDIVISUAL GOALS with Organisational goals.</p>
					<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				</div>
		   	<div class="clearfix"></div>
	    </div>
		</div>
	 	<!-- //about -->
		<!--sevices-->
		<div class="advantages" id="services">
			<div class="container">
				<div class="advantages-main">
					<h3 class="title-w3-agileits">Our Services</h3>
				  <div class="advantage-bottom">
						<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
							<div class="advantage-block ">
								<i class="fa fa-credit-card" aria-hidden="true"></i>
						 		<h4>Training Services</h4>
						 		<p>Variety of training services, may that be for educational purposes or corporate, we provide both. Contact us for more details.</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Educational Training</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Personality Development </p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Psychometric Tests </p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Corporate Training</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Senior Management</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Attitude Training</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>SWOT Analysis</p>
							</div>
						</div>
						<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
							<div class="advantage-block">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
						 		<h4>Privileged Services & Methodologies</h4>
						 		<p>Privileged Services which are neccessary for micromanaging a business or an organization are provided as well. Our methods for providing those services are listed as well. Contact for more details.</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Energy Management</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Creating Culture</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Predicting Performance</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Seminars</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Guest Lectures</p>
								<p><i class="fa fa-check" aria-hidden="true"></i>Workshops</p>
						 	</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!--//sevices-->
		<!-- team -->
		<div class="team" id="team">
			<div class="container">
					<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
					<div id="horizontalTab">
							<ul class="resp-tabs-list">
							<li>
								<img src="images/teams1.jpg" alt=" " class="img-responsive" />
							</li>
							<li>
								<img src="images/teams2.jpg" alt=" " class="img-responsive" />
							</li>
							<li>
								<img src="images/teams3.jpg" alt=" " class="img-responsive" />
							</li>
							<li>
								<img src="images/teams4.jpg" alt=" " class="img-responsive" />
							</li>
							</ul>
							<div class="resp-tabs-container">
							<div class="tab1">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Lucas Jimenez</h4>
									<span>CEO</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab2">
							<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Sarah Connor</h4>
									<span>title</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab3">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Ivan Simpson</h4>
									<span>title</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab4">
							<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Marc Gutierrez</h4>
									<span>title</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							</div>
					</div>
			</div>
		</div>
		<!-- //team -->
		<!-- visitors -->
		<div class="w3l-visitors-agile" id="client">
			<div class="container">
				<h3 class="title-w3-agileits title-black-wthree">What Our Client Says</h3>
			</div>
			<div class="w3layouts_work_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c1.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										Trained with SPIRIT
									</h4>
									<p>I am thankful to SPIRIT and Abhijeet for their efforts to train me. The methodology that they are using is awesome and it helped me grow as an independent learner </p>
									<h5>Suraj<p>Software Developer Persistent Systems Pvt Ltd</h5>
									<p>  (Individual Trainee)</p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c2.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										Trained with SPIRIT
									</h4>
									<p>The way you share your knowledge will take SPIRIT miles ahead with lots of progress.  Along with the training it’s your connect and deliverance that not only enhances the content but also develops the deep rooted understanding. </p>
									<h5>Prajakta Kohale</h5>
									<p>Manager – HR HCG NCHRI CANCER CENTRE, Nagpur</p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c3.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										Trained with SPIRIT
									</h4>
									<p>I can now easily measure my success through the customised yardstick developed by Abhijeet. The appreciations I received from clients after learning the progress techniques in SPIRIT certify this growth. </p>
									<h5>Sushant Barhanpure </h5>
									<p>Associate Senior Engineer Master Card</p>
								</div>
								<div class="clearfix"> </div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		 </div>
		<!-- visitors -->
		<!-- Gallery -->
		<section class="portfolio-w3ls" id="gallery">
			<h3 class="title-w3-agileits title-black-wthree">Our Clients</h3>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Direct-Trainings-0.jpg" class="swipebox"><img src="images/clients/Direct-Trainings-0.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>HCG Hospitals</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Direct-Trainings-1.jpg" class="swipebox"><img src="images/clients/Direct-Trainings-1.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>MedCash Healthcare Transactions</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Direct-Trainings-2.jpg" class="swipebox"><img src="images/clients/Direct-Trainings-2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>Tata Aeronautics Limited</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Through-MedCash-0.jpg" class="swipebox"><img src="images/clients/Through-MedCash-0.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>Asian Kidney Hospital & Medical Center</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Through-MedCash-1.jpg" class="swipebox"><img src="images/clients/Through-MedCash-1.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>Icon Hospital</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-4 gallery-grid gallery1">
				<a href="images/clients/Through-MedCash-2.jpg" class="swipebox"><img src="images/clients/Through-MedCash-2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>Vidharbha Institute of Medical Science</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="clearfix"> </div>
		</section>
	 	<!-- //gallery -->
		<!-- contact -->
		<section class="contact-w3ls" id="contact">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
					<div class="contact-agileits">
						<h4>Contact Us</h4>
						<p class="contact-agile2">Sign Up For Our News Letters</p>
						<form  method="post" name="sentMessage" id="contactForm" >
							<div class="control-group form-group">

		                            <label class="contact-p1">Full Name:</label>
		                            <input type="text" class="form-control" name="name" id="name" required >
		                            <p class="help-block"></p>

		                    </div>
		                    <div class="control-group form-group">

		                            <label class="contact-p1">Phone Number:</label>
		                            <input type="tel" class="form-control" name="phone" id="phone" required >
									<p class="help-block"></p>

		                    </div>
		                    <div class="control-group form-group">

		                            <label class="contact-p1">Email Address:</label>
		                            <input type="email" class="form-control" name="email" id="email" required >
									<p class="help-block"></p>

		                    </div>


		                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
						</form>
						<?php
						if(isset($_POST['sub']))
						{
							$name =$_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$approval = "Not Allowed";
							$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;


							if(mysqli_query($con,$sql))
							echo"OK";

						}
						?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
					<h4>Connect With Us</h4>
					<p class="contact-agile1"><strong>Phone :</strong>+91 9112299630 </p>
					<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:abhijeetdehadrai9@gmail.com">abhijeetdehadrai9@gmail.com</a></p>
					<p class="contact-agile1"><strong>Address :</strong>Mukteshwari<br>Plot No-48,Jaiprakash Nagar,Nagpur </p>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
		<!-- /contact -->
		<div class="copy">
	    <p>© 2019 SPIRIT . All Rights Reserved | Design by <a href="http://a2datatech.com">a2datatech.com</a></p>
	  </div>
		<!--/footer -->
		<div class="contactus-popup" style="display: none;">
			<section class="contactus-popup-sec" >
			  <button class="contactus-popup-clsbtn close-btn">X</button>
			  <h1 data-edit="text">Inquiry</h1>
			  <div class="form-content-sec">
			    <h3 data-edit="text">Want to ask more about our services?
			      Just fill the form below and submit.</h3>
			    <ul>
						<form method="post" name="sentInquiry" id="inquiryForm">
				      <li>
								<h4>Name</h4>
				        <input required name="inquiryName" type="text">
				      </li>
				      <li>
								<h4>Email</h4>
				        <input required name="inquiryEmail" type="email">
				      </li>
				      <li>
				        <textarea required name="message" placeholder="Your Message" data-edit="placeholder"></textarea>
				      </li>
				      <li>
								<input type="submit" name="inquiry" value="Contact Us" class="contact-btn">
				      </li>
						</form>
						<?php
						if(isset($_POST['inquiry']))
						{
							$iname =$_POST['inquiryName'];
							$msg = $_POST['message'];
							$iemail = $_POST['inquiryEmail'];
						}
						?>
			    </ul>
			    <h6 data-edit="text">We Promise We Dont Spam Your Inbox</h6>
			  </div>
			</section>
		</div>
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- contact form -->
		<script src="js/jqBootstrapValidation.js"></script>
		<!-- /contact form -->
		<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
		<!-- //Calendar -->
		<!-- gallery popup -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
		<!-- //gallery popup -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- flexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
			});
		});
		</script>
		<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
					// You can also use "$(window).load(function() {"
					$(function () {
						// Slideshow 4
						$("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
						});

					});
		</script>
		<!--search-bar-->
		<script src="js/main.js"></script>
		<!--//search-bar-->
		<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});

				$('button.close-btn').on('click', function(){
					$('.contactus-popup').fadeOut(400);
				});

				$('a.inquiry').on('click', function(e){
					e.preventDefault();
					$('.contactus-popup').fadeIn(400);
				});
			});
		</script>
		<!--//tabs-->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
		  $('[data-toggle="popover"]').popover();
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<div class="arr-w3ls">
			<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<div class="arr-w3ls">
			<a href="" id="toTop" class="inquiry" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- //smooth scrolling -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	</body>
</html>
