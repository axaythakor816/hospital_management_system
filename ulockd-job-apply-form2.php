<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/bclinico/ulockd-job-apply-form2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 10:01:07 GMT -->
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
	if(isset($_POST['apply']))
{
 
			$filename = $_FILES['uimage']['name'];
			$tempfile = $_FILES['uimage']['tmp_name'];
			$folder = "job/".$filename;
            
            $query="INSERT INTO `jobapply`(`name`, `email`, `number`, `gender`, `jobrole`, `note`, `file`) VALUES ('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[gender]','$_POST[jobrole]','$_POST[note]','$filename')";
              if(mysqli_query($conn,$query))
            {

				if(move_uploaded_file($tempfile,$folder))
				{
						echo"<h4>job aaply successfully
						</h4>";
						
					}
					else{
						echo "<h4>file uploaded error</h4>";
					}
				
            
               
            }
            else{
				echo"
                <div class='alert alert-danger' role='alert'>
					<h4 class='text-center'>cannot run query</h4>
				</div>
                ";      
            }
		}
		?>

<div class="wrapper"><!---
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
  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
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
  					<ul class="list-inline text-right tac-smd">
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
					<!-- Start Top Search -->
			        <div class="top-search">
			            <div class="container">
			                <div class="input-group">
			                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
			                    <input type="text" class="form-control" placeholder="Search">
			                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			                </div>
			            </div>
			        </div>
			        <!-- End Top Search -->

		            <!-- Start Atribute Navigation -->
		            <div class="attr-nav">
		                <ul>
		                    <li class="dropdown">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
		                            <i class="fa fa-shopping-bag"></i>
		                            <span class="badge">3</span>
		                        </a>
		                        <ul class="dropdown-menu cart-list">
		                            <li>
		                                <a href="#" class="photo"><img src="images/shop/s1.jpg" class="cart-thumb" alt="s1.jpg" /></a>
		                                <h6><a href="#">Delica omtantur </a></h6>
		                                <p>2x - <span class="price">$99.99</span></p>
		                            </li>
		                            <li>
		                                <a href="#" class="photo"><img src="images/shop/s2.jpg" class="cart-thumb" alt="s2.jpg" /></a>
		                                <h6><a href="#">Omnes ocurreret</a></h6>
		                                <p>1x - <span class="price">$33.33</span></p>
		                            </li>
		                            <li>
		                                <a href="#" class="photo"><img src="images/shop/s3.jpg" class="cart-thumb" alt="s3.jpg" /></a>
		                                <h6><a href="#">Agam facilisis</a></h6>
		                                <p>2x - <span class="price">$99.99</span></p>
		                            </li>
		                            <li class="total">
		                                <span class="pull-right"><strong>Total</strong>: $0.00</span>
		                                <a href="#" class="btn btn-default btn-cart">Cart</a>
		                            </li>
		                        </ul>
		                    </li>
		                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
		                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
		                </ul>
		            </div>
		            <!-- End Atribute Navigation -->

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

			        <!-- Start Side Menu -->
			        <div class="side bgc-thm">
			            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
			            <div class="widget">
			                <h4 class="title">Custom Pages</h4>
			                <ul class="link">
			                    <li><a href="#">About</a></li>
			                    <li><a href="#">Services</a></li>
			                    <li><a href="#">Blog</a></li>
			                    <li><a href="#">Portfolio</a></li>
			                    <li><a href="#">Contact</a></li>
			                </ul>
			            </div>
			            <div class="widget">
			                <h4 class="title">Additional Links</h4>
			                <ul class="link">
			                    <li><a href="#">Retina Homepage</a></li>
			                    <li><a href="#">New Page Examples</a></li>
			                    <li><a href="#">Parallax Sections</a></li>
			                    <li><a href="#">Shortcode Central</a></li>
			                    <li><a href="#">Ultimate Font Collection</a></li>
			                    <li><img title="Facebook Feed With Client File" class="img-responsive ulockd-mt10" src="images/resource/image3.png" alt="image3.png"></li>
			                </ul>
			            </div>
			        </div>
			        <!-- End Side Menu -->
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
						<h1 class="text-uppercase">JOB APPLY FORM</h1>
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
							<li> <a href="#"> JOB APPLY FORM </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="booking_form_style1 text-center">
		                <!-- Booking Form Sart-->
			            <form id="jobapply_form" class="booking_form_area"  method="POST" action="#" enctype="multipart/form-data" novalidate="novalidate">
			                <div class="messages"></div>
							<div class="row">
				                <div class="col-sm-12">
				                	<h3>Job Apply Form</h3>
				                </div>
				                <div class="col-sm-12">
				                    <div class="form-group text-left">
										<label for="form_name"><i class="fa fa-user-o"></i> FULL Name <small>*</small></label>
										<input id="form_name" name="name" class="form-control" placeholder="FULL Name" required="required" data-error="Name is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-12">
									<div class="form-group text-left">
										<label for="form_email"><i class="fa fa-envelope-open-o"></i> Enter Your Email <small>*</small></label>
										<input id="form_email" name="email" class="form-control required email" placeholder="Enter Your Email" required="required" data-error="Email is required." type="email">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
								<div class="col-sm-12">
				                    <div class="form-group text-left">
										<label for="form_phone"><i class="fa fa-phone"></i> Enter Your Phone Number <small>*</small></label>
										<input id="form_phone" name="number" class="form-control required" placeholder="Enter Your Phone Number" required="required" data-error="Phone Number is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group text-left">
					                    <div class="ulockd-select-style">
											<label for="form_gender"><i class="fa fa-user-o"></i> Select Your Gender <small>*</small></label>
					                        <select id="form_option" class="form-control form_control required" name="gender" required="required" data-error="Gender is required.">
				                                <option value="">Select A Gender</option>
				                                <option value="male">Male</option>
				                                <option value="female">Female</option>
				                                <option value="other">Other</option>
					                        </select>
					                    </div>
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group text-left">
					                    <div class="ulockd-select-style">
											<label for="form_job"><i class="fa fa-info"></i> Select job Role <small>*</small></label>
					                        <select id="form_option2" class="form-control form_control required" name="jobrole" required="required" data-error="Option is required.">
				                                <option value="">Select A Job Role </option>
				                                <option value="Account Executive">Account Executive</option>
				                                <option value="Doctor">Doctor</option>
				                                <option value="Nurse">Nurse</option>
					                        </select>
					                    </div>
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
			        			<div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="note" class="form-control ulockd-form-tb required" rows="5" placeholder="Additional Note" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
									
				                    <div class="form-group text-left">
				                    	<label for="form_attachment"><i class="fa fa-file-text-o"></i> Upload Resume</label>
					                    <input type="file" id="form_attachment" name="uimage" class="form-control" required="Resume is Required">
				                    </div>
				                    <div class="form-group text-center">
					                    <input name="form_botcheck" class="form-control" type="hidden" value="">
					                    <button type="submit" name="apply" class="btn btn-lg btn-block ulockd-btn-thm2 ">Apply Now</button>
				                    </div>
			        			</div>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Our Footer -->
	<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-widget-footer">
    					<img alt="" src="images/footer-logo.png" class="ulockd-footer-log">
    						<ul class="list-unstyled">
    						<li><a href="#"><span class="flaticon-old-handphone text-thm"></span> +99 55 66 88 526</a> </li>
    						<li><a href="#"><span class="flaticon-black-back-closed-envelope-shape text-thm"></span> Karn@email.com</a></li>
    						<li><a href="#"><span class="flaticon-house text-thm"></span> Victoria 8007 Australia Envato HQ 121 King Street, Melbourne.</a></li>
    					</ul>
						<ul class="list-inline footer-font-icon ulockd-mt20">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-feed"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
    				</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-footer-lnews">
						<h3 class="text-uppercase">Latest News</h3>
						<div class="ulockd-media-box">
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="images/blog/s1.jpg" alt="s1.jpg">
								    </a>
							    </div>
							    <div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							    </div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="images/blog/s2.jpg" alt="s2.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							  	</div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="images/blog/s3.jpg" alt="s3.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							  	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-2 ulockd-prl5">
					<div class="ulockd-footer-qlink mb30-xxsd">
						<h3 class="text-uppercase">TWITTER</h3>
						<div class="twitter"></div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="flickr-widget">
						<h3 class="text-uppercase">Flickr Feed</h3>
						<ul class="list-inline">
							<li>
								<div class="thumb">
									<img alt="flckr1.jpg" src="images/gallery/flckr1.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr2.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr3.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr4.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr5.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr6.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr7.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr8.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
    				<div class="footer-newsletter-widget mb30-xxsd">
    					<h4 class="title text-uppercase">News Letter</h4>
		                <form class="ulockd-mailchimp">
		                    <div class="input-group">
			                    <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
			                    <span class="input-group-btn">
			                        <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
			                    </span>
		                    </div>
		                </form>
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
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<!-- Color Switcher script --> 

<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/bclinico/ulockd-job-apply-form2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 10:01:07 GMT -->
</html>