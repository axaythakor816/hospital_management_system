<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/add-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Karn - Hospital</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	
	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	
	<!-- Select2 CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
	
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
	
	<!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     
</head>

<body>
    <?php 
    require('config.php');
    if(isset($_POST['send']))
    {
        $user_query = "SELECT * FROM `appointment` WHERE `name`='$_POST[name]' OR `email`='$_POST[email]'";
        $result=mysqli_query($conn,$user_query);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['name']==$_POST['name'])
                {
                    echo"
                    <script>alert('user name alredy taken');
                    window.location.href='hom.php';
                    </script>";
                }
                else{
                    echo"
                    <script>alert('email alredy taken');
                    window.location.href='home.php';
                    </script>";
                }
            }
            
            else{
                
                $query="INSERT INTO `appointment`(`name`, `gender`,`number`, `email`, `address`, `doctor`, `date`, `note`) VALUES ('$_POST[name]','$_POST[gender]','$_POST[number]','$_POST[email]','$_POST[address]','$_POST[doctor]','$_POST[date]','$_POST[note]')";
                  if(mysqli_query($conn,$query))
                {
                    ?>
                <script>
                    alert('registration successfully...')
                    window.location.href='appointments.php';
                </script>";
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
        }
        else{
            echo"
            <script>alert('connt run query');
            window.location.href='index-multipage.php';
            </script>;
            ";
        }
    }
    
    ?>



    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Karn Hospital</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><img src="assets/img/icons/bar-icon.svg"  alt=""></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="assets/img/icons/bar-icon.svg"  alt=""></a>
			<div class="top-nav-search mob-view">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<a class="btn" ><img src="assets/img/icons/search-normal.svg" alt=""></a>
				</form>
			</div>
            <ul class="nav user-menu float-end">
               
			<?php
										 
										
											$query="SELECT * FROM admin";
											$data=mysqli_query($conn,$query);
											$result=mysqli_num_rows($data);
											if($result){
                                              

												while($row=mysqli_fetch_array($data)){
													?>
				<li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
						<div class="user-names">
							<h5><?php echo $row['admin_name']; echo " "; echo $row['lname'];?> </h5>
							
                                           


                        	<span>Admin</span>
						</div>
						<span class="user-img">
							<img  src="assets/img/user-06.jpg"  alt="Admin">
						</span>
                    </a>
					
                </li>
				<li class="nav-item ">
                    <a href="settings.php"  class="hasnotifications nav-link"><img src="assets/img/icons/setting-icon-01.svg" alt=""> </a>
                </li>
            </ul>
            <?php
			}	
		}else{
			echo"No Record Found" ;
		}
			?>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
						<li class="submenu">
							<a href=""><span class="menu-side"><img src="assets/img/icons/menu-icon-01.svg" alt=""></span> <span> Dashboard </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a class="active" href="index.php">Admin Dashboard</a></li>
								</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-02.svg" alt=""></span> <span> Doctors </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="doctors.php">Doctor List</a></li>
								<li><a href="add-doctor.php">Add Doctor</a></li>
								
								
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt=""></span> <span>Patients </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="patients.php">Patients List</a></li>
								<li><a href="add-patient.php">Add Patients</a></li>
								
								
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt=""></span> <span> Staff </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="staff-list.php">Staff List</a></li>
								<li><a href="add-staff.php">Add Staff</a></li>
							
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-04.svg" alt=""></span> <span> Appointments </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="appointments.php">Appointment List</a></li>
								<li><a href="add-appointment.php">Book Appointment</a></li>
								
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-05.svg" alt=""></span> <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="schedule.php">Schedule List</a></li>
								<li><a href="add-schedule.php">Add Schedule</a></li>
								
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-06.svg" alt=""></span> <span> Departments </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="departments.php">Department List</a></li>
								<li><a href="add-department.php">Add Department</a></li>
								
							</ul>
						</li>
						
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-07.svg" alt=""></span> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices.php">Invoices</a></li>
								<li><a href="payments.php">Payments</a></li>
								
								<li><a href="taxes.php">Taxes</a></li>
							
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-09.svg" alt=""></span> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="salary.php"> Employee Salary </a></li>
								<li><a href="salary-view.php"> Payslip </a></li>
							</ul>
						</li>
						
                        <li>
                            <a href="settings.php"><span class="menu-side"><img src="assets/img/icons/menu-icon-16.svg" alt=""></span> <span>Settings</span></a>
                        </li>
                        
                    </ul>
					<div class="logout-btn">
						<a href="login.php"><span class="menu-side"><img src="assets/img/icons/logout.svg" alt=""></span> <span>Logout</span></a>
					</div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="appointments.php">Appointment </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Book Appointment</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-sm-12">
					
						<div class="card">
							<div class="card-body">
								<form action="#" method="POST">
									<div class="row">
										<div class="col-12">
											<div class="form-heading">
												<h4>Patient Details</h4>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-4">  
											<div class="input-block local-forms">
												<label >Full Name <span class="login-danger">*</span></label>
												<input class="form-control" name="name" type="text" >
											</div>
										</div>
										
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Select Gender <span class="login-danger">*</span></label>
												<select class="form-control select" name="gender">
                                                <option value="">Select Gender </option>
											    <option value="male">Male</option>
				                                <option value="female">Female</option>
				                                <option value="other">Other</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Mobile <span class="login-danger">*</span></label>
												<input class="form-control" type="text" name="number" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Email <span class="login-danger">*</span></label>
												<input class="form-control" type="email" name="email" >
											</div>
										</div>
										<div class="col-12 col-sm-12">
											<div class="input-block local-forms">
												<label>Address  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30" name="address"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-heading">
												<h4>Appointment Details</h4>
											</div>
										</div>

                                        <div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >select Doctor <span class="login-danger">*</span></label>
												<select class="form-control select" name="doctor">
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
											</div>
										</div>

										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms cal-icon">
												<label >Date of Appointment <span class="login-danger">*</span></label>
												<input class="form-control datetimepicker" type="text" name="date"  >
											</div>
										</div>
										
										<div class="col-12 col-sm-12">
											<div class="input-block local-forms">
												<label>Notes  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30" name="note"></textarea>
											</div>
										</div>
										
										<div class="col-12">
											<div class="doctor-submit text-end">
												<button type="submit" name="send" class="btn btn-primary submit-form me-2">Submit</button>
												
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>							
					</div>					
				</div>
            </div>
           
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this ?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.7.1.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
	<script src="assets/js/feather.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
    <script src="assets/js/jquery.slimscroll.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
	<script src="assets/js/select2.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
	
	<!-- Datepicker Core JS -->
	<script src="assets/plugins/moment/moment.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>
	
    <script src="assets/js/app.js" type="62e37823e8d033e818e4a9cd-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="62e37823e8d033e818e4a9cd-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad677dbc480a9","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/add-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:36 GMT -->
</html>