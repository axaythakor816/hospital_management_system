<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/bclinico/page-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 10:01:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="ambulance, beauty, clinic, cosmetic, dentist, doctor, family doctor, gynecology, health & care, hospital, medical, pediatric, plastic surgery, skin care, surgeon etc">
<meta name="unlockdesign" content="SaniulHassan">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Theme Color stylesheet -->
<link rel="stylesheet" href="css/theme-color.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Karn - Hospital</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php 
require('config.php');
if(isset($_POST['send']))
{
  
            
            $query="INSERT INTO `appointment`(`name`, `gender`,`number`, `email`, `address`, `doctor`, `date`, `note`) VALUES ('$_POST[name]','$_POST[gender]','$_POST[number]','$_POST[email]','$_POST[address]','$_POST[doctor]','$_POST[date]','$_POST[note]')";
              if(mysqli_query($conn,$query))
            {
                ?>
            <script type="text/javascript">
                alert("registration successfully...")
                window.location.href='index-multipage.php ';
            </script>
            <?php
               
            }
            else{
                echo"
                <script>alert('connt run query');
                window.location.href='page-appointment.php';
                </script>;
                ";        
            }
		}

?>



<div class="wrapper">
	<!--
	<div id="preloader" class="preloader">
		<div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
	</div>-->
  	<div class="header-top">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div class="social-linked">
  						<ul class="list-inline">
  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  							<li><a href="#"><i class="fa fa-rss"></i></a></li>
  							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
  						</ul>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="welcm-ht text-center">
	  					<p class="ulockd-welcntxt">Welcome To Our<span class="color-black33"> Karn</span></p>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="welcm-ht text-right">
						<ul class="list-inline">
							<li>
								<div class="dropdown lang-button text-center">
									<button class="dropbtn">Language</button>
									<div class="dropdown-content">
									    <a href="#"> <span><img src="images/resource/english.jpg" alt=""></span> English</a>
									    <a href="#"> <span><img src="images/resource/franch.jpg" alt=""></span> French</a>
									    <a href="#"> <span><img src="images/resource/spanish.jpg" alt=""></span> Spanish</a>
									</div>
								</div>
							</li>
							
								<li class="login-popup">
									<a class="color-white" href="login.php" data-toggle="">Login</a>
									
								</li>
								<li class="login-popup">
									<a class="color-white" href="registration.php" data-toggle="">Registration</a>
							</li>
							<li class="login-popup">
							<a class="color-white" href="adminlog.php" data-toggle="">Admin Login</a>
							</li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="header-middle">
  		<div class="container">
  			<div class="row">
  				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
  					<div class="ulockd-welcm-hmddl tac-md">
						<a href="index-2.html" class="ulockd-main-logo"><img src="images/header-logo.png" alt=""></a>
  					</div> 
  				</div>
  				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-ohour-info style2 mb35-xsd text-center">
						<div class="ulockd-icon text-thm"><span class="flaticon-email-filled-closed-envelope"></span></div>
						<div class="ulockd-info">
							<h4>Mail Us</h4>
							<p class="ulockd-addrss"><strong>Email:</strong> Karn@email.com</p>
						</div>
					</div>
  				</div>
  				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-ohour-info style2 text-center">
						<div class="ulockd-icon text-thm"><span class="flaticon-old-handphone"></span></div>
						<div class="ulockd-info">
							<h4>Call Us</h4>
							<p class="ulockd-addrss">+98-9875-5968-54</p>
						</div>
					</div>
  				</div>
  				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-ohour-info style2 text-center">
						<div class="ulockd-icon text-thm"><span class="flaticon-home"></span></div>
						<div class="ulockd-info">
							<h4>Address</h4>
							<p>Four infity loop Av. 45635</p>
						</div>
					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<!-- Header Styles -->
	<header class="header-nav">
		<div class="main-header-nav navbar-scrolltofixed">
			<div class="container">
			    <nav class="navbar navbar-default bootsnav menu-style1">
		            <!-- Start Header Navigation -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
		                    <i class="fa fa-bars"></i>
		                </button>
		            </div>
		            <!-- End Header Navigation -->

		            <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
		                <ul class="nav navbar-nav navbar-left" data-in="bounceIn">
		                    <li class="">
		                        <a href="index-multipage.php" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
		                    </li>
		                    <li class="">
		                        <a href="page-about2.php" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
		                    </li>
		                    <li class="">
		                        <a href="page-service2.php" class="dropdown-toggle" data-toggle="dropdown">Service</a>
								
		                    </li>
		                    <li class="">
		                        <a href="page-team2.php" class="dropdown-toggle" data-toggle="dropdown">Team</a>
								
		                    </li>
							
		                    <li class="">
		                        <a href="page-department.php" class="dropdown-toggle" data-toggle="dropdown">Department</a>
	                    </li>
		                    <li class="">
		                        <a href="ulockd-job-apply-form2.php" class="dropdown-toggle" data-toggle="dropdown">job apply</a>
		                    </li>
							<li class="">
		                        <a href="page-timetable.php" class="dropdown-toggle" data-toggle="dropdown">Doctor's Timetable</a>
							</li>
							<li class="">
		                        <a href="page-appointment.php" class="dropdown-toggle" data-toggle="dropdown">appointment</a>
							</li>
		                </ul>
		            </div><!-- /.navbar-collapse -->
			    </nav>
			</div>
		</div>
	</header>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">APPOINTMENT</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-icd-layer">
						<ul class="list-inline ulockd-icd-sub-menu">
							<li><a href="#"> HOME </a></li>
							<li><a href="#"> > </a></li>
							<li> <a href="#"> APPOINTMENT </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about-one inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-7">
					<!-- Appointment Form Starts -->
                    <form id="appointment_form" name="appointment_form" class="appointment_form text-center" action="#" method="POST" novalidate="novalidate">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12">
					        	<h2>Appointment with Expert</h2>
					        	<p>Let's Appointment With our Exparts Who Try to Solved Your Problem.</p>
                                <div class="form-group text-left">
                                    <label for="form_name"><i class="fa fa-user-o"></i> Name <small>*</small></label>
                                    <input id="form_name" name="name" class="form-control" placeholder="enter a name" required="required" data-error="Name is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-md-12 text-left">
								
									
										<label for="form_job"><i class="fa fa-user-md" aria-hidden="true"></i> Select Gender <small>*</small></label>
										<select id="" class="form-control form_control required" name="gender" required="required" data-error="Option is required.">
											<option value="">Select Gender </option>
											<option value="male">Male</option>
				                                <option value="female">Female</option>
				                                <option value="other">Other</option>
											
										</select>
							</div>
							<div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="form_phone"><i class="fa fa-phone"></i> Phone <small>*</small></label>
                                    <input id="form_phone" name="number" class="form-control required" placeholder="enter a phone" required="required" data-error="Phone Number is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>  
							
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="form_email"><i class="fa fa-envelope-open-o"></i> Email <small>*</small></label>
                                    <input id="form_email" name="email" class="form-control required email" placeholder="enter an email" required="required" data-error="Email is required." type="email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

							<div class="col-md-12">
											<div class="form-group text-left">
												<label>Address  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" name="address" cols="30"></textarea>
											</div>
										</div>
							<div class="col-md-12 text-left">
								
									
										<label for="form_job"><i class="fa fa-user-md" aria-hidden="true"></i> Select Doctor <small>*</small></label>
										<select id="doctor" class="form-control form_control required" name="doctor" required="required" data-error="Option is required.">
											<option value="">Select Doctor </option>
											<option value="Orthopedist - Henry Jones">Orthopedist - Henry Jones</option>
											<option value="skin Specialist - Madeleine - Smith">skin Specialist - Madeleine - Smith</option>
											<option value="Psychology - Savannah Smith">Psychology - Savannah Smith</option>
											<option value="Neurologist - smith Johnsonh">Neurologist - smith Johnsonh</option>
											<option value="Dentist - Bella Smith">Dentist - Bella Smith</option>
											<option value="Cardiologist - John Smith">Cardiologist - John Smith</option>
											<option value="Gynecologist - Ana Smith">Gynecologist - Ana Smith</option>
											<option value="Neurologist - James Williams">Neurologist - James Williams</option>
										</select>
									
									<div class="help-block with-errors"></div>
							</div>
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="form_date"><i class="fa fa-calendar-check-o"></i> Date <small>*</small></label>
                                    <input id="form_date" name="date" class="form-control required datepicker" placeholder="enter a date" required="required" data-error="Subject is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> 
                            
                        </div>
                        <div class="form-group text-left">
                            <label for="form_name"><i class="fa fa-file-text-o"></i> notes</label>
                            <textarea id="form_message" name="note" class="form-control required" rows="5" placeholder="type in a message" required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group text-center">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                            <button type="submit" name="send" class="btn btn-lg ulockd-btn-thm2" data-loading-text="Getting Few Sec...">Send</button>
                        </div>
                    </form>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="ulockd-about-thumb">
						<img class="img-responsive img-whp" src="images/about/1.png" alt="1.png">
						<h2 class="ulockd-about-thumb-ttl">Vice Precident <span class="text-thm">Karn  </span></h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our About Page faq Section -->



	<!-- Our Team -->
	<section class="ulockd-team">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">OUR <span class="text-thm">Team</span></h2>
							</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="ulockd-team-member">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="images/team/1.jpg" alt="team1.jpg">
							<div class="team-overlay">
								<ul class="list-inline team-icon style2">
		  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  							<li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details text-left">
							<h3 class="member-name">James Williams</h3>
							<h5 class="member-post">- Neurologist</h5>
								</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="ulockd-team-member">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="images/team/2.jpg" alt="team2.jpg">
							<div class="team-overlay">
								<ul class="list-inline team-icon style2">
		  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  							<li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details text-left">
							<h3 class="member-name">Ana Smith</h3>
							<h5 class="member-post">- Dentist</h5>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="ulockd-team-member">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="images/team/4.jpg" alt="4.jpg">
							<div class="team-overlay">
								<ul class="list-inline team-icon style2">
		  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  							<li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details text-left">
							<h3 class="member-name">Jhon Smith</h3>
							<h5 class="member-post">- Cardiologist</h5>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<!-- Our Footer -->
	<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-4">
					<div class="ulockd-footer-fst-col mb30-xxsd">
						<img alt="" src="images/footer-logo.png" class="ulockd-footer-log">
    					<ul class="list-inline footer-font-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-feed"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-2">
					<div class="ulockd-footer-qlink mb30-xxsd">
						<h3 class="text-uppercase">NAVIGATI<span class="text-thm">ON</span></h3>
						<ul class="list-unstyled">
						<li><a href="index-multipage.php">Home</a></li>
							<li><a href="page-about2.php">News</a></li>
							<li><a href="page-service2.php">Our Services</a></li>
							
							<li><a href="page-team2.php">Team Details</a></li>
							<li><a href="index-multipage.php">Contact Us</a></li>
					
						</ul>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-contact  mb30-xxsd">
						<h3 class="text-uppercase">CONTACT <span class="text-thm">US</span></h3>
						<p>Victoria 8007 Australia Envato HQ 121 King Street, Melbourne.</p>
						<div class="ulockd-ftr-phone"><span>Phone </span>: <a href="#"> 99 55 66 88 526</a></div>
						<div class="ulockd-ftr-fax"><span>Fax </span>: <a href="#"> 55 44 77 62</a></div>
						<div class="ulockd-ftr-mail"><span>Email </span>: <a href="#"> Karn@email.com</a></div>
						</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-twitter example1">
						<h3 class="text-uppercase">TWITT<span class="text-thm">ER</span></h3>
						<div class="twitter"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<section class="ulockd-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<!-- Color Switcher script --> 
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/bclinico/page-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 10:01:15 GMT -->
</html>