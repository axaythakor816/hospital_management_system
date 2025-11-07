<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:38:27 GMT -->
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
	
	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
	
	<!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     
</head>

<body>
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
										 
										 require('config.php');
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
								<li><a href="expenses.php">Expenses</a></li>
								<li><a href="taxes.php">Taxes</a></li>
								<li><a href="provident-fund.php">Provident Fund</a></li>
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
								<li class="breadcrumb-item"><a href="index.php">Dashboard </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Admin Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="good-morning-blk">
					<div class="row">
						<div class="col-md-6">
							<div class="morning-user">
								<h2>Good Morning, <span><?php echo $row['admin_name']; echo " "; echo $row['lname'];?></span></h2>
								<p>Have a nice day at work</p>
							</div>
						</div>
						<div class="col-md-6 position-blk">
							<div class="morning-img">
								<img src="assets/img/morning-img-01.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<?php
			}	
		}else{
			echo"No Record Found" ;
		}
			?>
				
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								<img src="assets/img/icons/calendar.svg" alt="">
							</div>
							<?php
										 
										
											$query="SELECT * FROM appointment";
											$data=mysqli_query($conn,$query);
											if($result=mysqli_num_rows($data));
											{
											
                                             
													?>
							<div class="dash-content dash-count">
								<h4>Appointments</h4>
								<h2><span class="counter-up" ><?php echo $result; ?></span></h2>
								<?php
							}
						
							?>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								<img src="assets/img/icons/profile-add.svg" alt="">
							</div>
							<?php
										 
										
											$query="SELECT * FROM patient";
											$data=mysqli_query($conn,$query);
											if($result=mysqli_num_rows($data));
											{
											
                                             
													?>
							<div class="dash-content dash-count">
								<h4>New Patients</h4>
								<h2><span class="counter-up" ><?php echo $result; ?></span></h2>
								<?php
							}
							?>
								
							</div>
                        </div>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6 col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="chart-title patient-visit">
									<h4>Patient Visit by Gender</h4>
									<div >
										<ul class="nav chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>Male 75%</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> Female 25%</li>
										</ul>
									</div>
									
								</div>	
								<div id="patient-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patient by Department</h4>
								</div>	
								<div id="donut-chart-dash" class="chart-user-icon">
									<img src="assets/img/icons/user-icon.svg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-12  col-xl-4">
                        <div class="card top-departments">
							<div class="card-header">
								<h4 class="card-title mb-0">Top Departments</h4>
							</div>
                            <div class="card-body">
                                <div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="assets/img/icons/dep-icon-01.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>General Physician</h4>
										<p>35%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="assets/img/icons/dep-icon-02.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Dentist</h4>
										<p>24%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="assets/img/icons/dep-icon-03.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>ENT</h4>
										<p>10%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="assets/img/icons/dep-icon-04.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Cardiologist</h4>
										<p>15%</p>
									</div>
								</div>
								<div class="activity-top mb-0">
									<div class="activity-boxs comman-flex-center">
										<img src="assets/img/icons/dep-icon-05.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Opthomology</h4>
										<p>20%</p>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
					<div class="col-12 col-md-12  col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.php" class="patient-views float-end">Show all</a>
							</div>
							<div class="card-body p-0 table-dash">
								<div class="table-responsive">
											<table class="table mb-0 border-0 datatable custom-table">
										<thead>
											<tr>
												<th>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</th>
												<th>No</th>
												<th>Patient name</th>
												<th>Department And Doctor </th>
												<th>Date</th>
												
										</thead>
										<tbody>
										<?php
											$query="SELECT * FROM appointment";
											$data=mysqli_query($conn,$query);
											$result=mysqli_num_rows($data);
											if($result){
                                                $sr=1;

												while($row=mysqli_fetch_array($data)){
													?>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><?php echo $sr; ?></td>
												<td><?php echo $row['name']; ?></td>
												<td class="table-image appoint-doctor">
													
													<h2><?php echo $row['doctor']; ?></h2>
												</td>
												<td class="appoint-time"><?php echo $row['date']; ?></td>
												
												
											</tr>
											<?php
                                            $sr++;
												}	
											}else{
                                                echo"No Record Found" ;
                                            }
												?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<h4 class="card-title d-inline-block">Recent Patients </h4> <a href="patients.php" class="float-end patient-views">Show all</a>
							</div>
							<div class="card-block table-dash">
									<div class="table-responsive">
									<table class="table mb-0 border-0 datatable custom-table">
										<thead>
											<tr>
												<th>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</th>
												<th>No</th>
												<th>Patient name</th>
												<th>Department and Doctor</th>
												<th>Date of Birth</th>
												<th>Gender</th>
												<th>Admit Date</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php
										 
										
										 $query="SELECT * FROM patient";
										 $data=mysqli_query($conn,$query);
										 $result=mysqli_num_rows($data);
										 if($result){
											 $sr=1;

											 while($row=mysqli_fetch_array($data)){
												 
												 ?>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><?php echo $sr; ?></td>
												<td class="table-image">
													<h2><?php echo $row['fname']; echo " "; echo $row['lname']; ?></h2>
												</td>
												<td><?php echo $row['doctor']; ?></td>
												<td><?php echo $row['dob']; ?></td>
												<td><?php echo $row['gender']; ?></td>
												<td><button class="custom-badge status-green "><?php echo $row['admit']; ?></button></td>
												<?php
                                             $sr=$sr+1;
												}	
											}else{
                                                echo"No Record Found" ;
                                            }
												?>
											</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
	
	<!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Feather Js -->
	<script src="assets/js/feather.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Slimscroll -->
    <script src="assets/js/jquery.slimscroll.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Select2 Js -->
	<script src="assets/js/select2.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- counterup JS -->
	<script src="assets/js/jquery.waypoints.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	<script src="assets/js/jquery.counterup.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Apexchart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	<script src="assets/plugins/apexchart/chart-data.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>
	
	<!-- Custom JS -->
    <script src="assets/js/app.js" type="22e3beda9b031cdfffc44c78-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="22e3beda9b031cdfffc44c78-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad57b1a6bff64","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:39:25 GMT -->
</html>