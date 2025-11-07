<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:45:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Karn - Hospital</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
     
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo">
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
										 
								require("config.php");		
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
             <?php
             }
         }else{
             echo "no record found";
         }
         ?>

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
            	<!-- Page Content -->
                <div class="content container-fluid">

                	<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard </a></li>
									<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
									<li class="breadcrumb-item active">Settings</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="settings-menu-links">
						<ul class="nav nav-tabs menu-tabs">
							<li class="nav-item active">
								<a class="nav-link" href="settings.php">General Settings</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link" href="profile.php">My Profile</a>
							</li>
							
							
					
							
							<li class="nav-item">
								<a class="nav-link" href="change-password.php">Change Password</a>
							</li>
                           
							
						</ul>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Website Basic Details</h5>
								</div>
								<div class="card-body pt-0">
									<form>
										<div class="settings-form">
											<div class="input-block">
												<label>Website Name <span class="star-red">*</span></label>
												<input type="text" class="form-control" placeholder="Enter Website Name">
											</div>
											<div class="input-block ">
												<p class="settings-label">Logo <span class="star-red">*</span></p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="file" onchange="if (!window.__cfRLUnblockHandlers) return false; loadFile(event)" class="hide-input" data-cf-modified-bbf41e852b3e85ab8ea97df7-="">
													<label for="file" class="upload">
														<i class="feather-upload"></i>
													</label>
												</div>
												<h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
												<div class="upload-images">
													<img src="assets/img/logo-dark.png" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="feather-x-circle"></i>
													</a>
												</div>
											</div>
											<div class="input-block">
												<p class="settings-label">Favicon <span class="star-red">*</span></p>
												<div class="settings-btn">
													<input type="file" accept="image/*" name="image" id="files" onchange="if (!window.__cfRLUnblockHandlers) return false; loadFile(event)" class="hide-input" data-cf-modified-bbf41e852b3e85ab8ea97df7-="">
													<label for="file" class="upload">
														<i class="feather-upload"></i>
													</label>
												</div>
												<h6 class="settings-size">
													Recommended image size is <span>16px x 16px or 32px x 32px</span>
												</h6>
												<h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
												<div class="upload-images upload-size">
													<img src="assets/img/favicon.png" alt="Image">
													<a href="javascript:void(0);" class="btn-icon logo-hide-btn">
														<i class="feather-x-circle"></i>
													</a>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-5 col-md-6">
													<div class="input-block">
														<div class="status-toggle d-flex justify-content-between align-items-center">
															<p class="mb-0">RTL</p>
															<input type="checkbox" id="status_1" class="check">
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</div>
												</div>
											</div>
											<div class="input-block mb-0">
												<div class="settings-btns">
													<button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Update</button>&nbsp;&nbsp;
													<button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Address Details</h5>
								</div>
								<div class="card-body pt-0">
									<form>
										<div class="settings-form">
											<div class="input-block">
												<label>Address Line 1 <span class="star-red">*</span></label>
												<input type="text" class="form-control" placeholder="Enter Address Line 1">
											</div>
											<div class="input-block">
												<label>Address Line 2 <span class="star-red">*</span></label>
												<input type="text" class="form-control" placeholder="Enter Address Line 2">
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block">
														<label>City <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block">
														<label>State/Province <span class="star-red">*</span></label>
														<select class="select form-control">
															<option selected="selected">Select</option>
															<option>California</option>
															<option>Tasmania</option>  
															<option>Auckland</option>
															<option>Marlborough</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block">
														<label>Zip/Postal Code <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block">
														<label>Country <span class="star-red">*</span></label>
														<select class="select form-control">
															<option selected="selected">Select</option>
															<option>India</option>
															<option>London</option>  
															<option>France</option>
															<option>USA</option>
														</select>
													</div>
												</div>
											</div>
											<div class="input-block mb-0">
												<div class="settings-btns">
													<button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Update</button>&nbsp;&nbsp;
													<button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
                </div>
				<!-- /Page Content -->
			
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.7.1.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/jquery.slimscroll.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/feather.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/jquery.dataTables.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap4.min.html" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="assets/js/moment.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    <script src="assets/js/app.js" type="bbf41e852b3e85ab8ea97df7-text/javascript"></script>
    

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="bbf41e852b3e85ab8ea97df7-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad64d0be3ff7b","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:06 GMT -->
</html>    