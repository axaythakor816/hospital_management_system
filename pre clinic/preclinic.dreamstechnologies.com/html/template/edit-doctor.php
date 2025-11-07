<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Karn - Hospital</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!-- Bootstrap CS -->
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
            <div class="content">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="doctors.php">Doctors </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Edit Doctor</li>
							</ul>
						</div>
					</div>
				</div>

				<?php 
    			
				$id=$_GET['id'];
				$select="SELECT * FROM doctor WHERE id='$id'";
				$data=mysqli_query($conn,$select);
				$row=mysqli_fetch_array($data);

				?>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-sm-12">
					
						<div class="card">
							<div class="card-body">
							<form action="#" method="POST">
									<div class="row">
										<div class="col-12">
											<div class="form-heading">
												<h4>Doctor Details</h4>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-4">  
											<div class="input-block local-forms">
												<label >First Name <span class="login-danger">*</span></label>
												<input value="<?php echo $row['dfname']?>" name="dfname" class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms">
												<label >Last Name <span class="login-danger">*</span></label>
												<input value="<?php echo $row['dlname']?>" name="dlname" class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms">
												<label >User Name <span class="login-danger">*</span></label>
												<input value="<?php echo $row['duname']?>" name="duname" class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Mobile <span class="login-danger">*</span></label>
												<input value="<?php echo $row['dnumber']?>" name="dnumber" class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Email <span class="login-danger">*</span></label>
												<input value="<?php echo $row['demail']?>" name="demail" class="form-control" type="email" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Password <span class="login-danger">*</span></label>
												<input value="<?php echo $row['dpassword']?>" name="dpassword" class="form-control" type="password" placeholder="" >
											</div>
										</div>
										<!--
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Confirm Password <span class="login-danger">*</span></label>
												<input class="form-control" type="password" placeholder="" >
											</div>
										</div>-->
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms cal-icon">
												<label >Date Of Birth  <span class="login-danger">*</span></label>
												<input value="<?php echo $row['ddob']?>" name="ddob" class="form-control datetimepicker" type="text"  placeholder="" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block select-gender">
												<label class="gen-label">Gender<span class="login-danger">*</span></label>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" value="Male" name="dgender" class="form-check-input mt-0">Male
													</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" value="Female" name="dgender" class="form-check-input mt-0">Female
													</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" value="other" name="dgender" class="form-check-input mt-0">other
													</label>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms">
												<label >Education <span class="login-danger">*</span></label>
												<input value="<?php echo $row['dedu']?>" name="dedu" class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<!--
										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms">
												<label >Designation <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="" >
											</div>
										</div>-->
										<div class="col-12 col-md-6 col-xl-4">
											<div class="input-block local-forms">
												<label >Department <span class="login-danger">*</span></label>
												<select  name="ddepart" class="form-control select">
												<option value="">Select Doctor </option>
											<option value="Orthopedist">Orthopedist</option>
											<option value="skin Specialist">skin Specialist</option>
											<option value="Psychology">Psychology</option>
											<option value="Neurologist">Neurologist</option>
											<option value="Dentist">Dentist</option>
											<option value="Cardiologist">Cardiologist</option>
											<option value="Gynecologist">Gynecologist</option>
											<option value="Neurologist">Neurologist</option>
												 
												  </select>
											</div>
										</div>
										<div class="col-12 col-sm-12">
											<div class="input-block local-forms">
												<label>Address  <span class="login-danger">*</span></label>
												<textarea  name="daddress" class="form-control" rows="3" cols="30"></textarea>
											</div>
										</div>
										<!--
										<div class="col-12 col-md-6 col-xl-3">
											<div class="input-block local-forms">
												<label >City <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select City</option>
													<option>Alaska</option>
													<option>Los Angeles</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3">
											<div class="input-block local-forms">
												<label >Country  <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select Country </option>
													<option>Usa</option>
													<option>Uk</option>
													<option>Italy</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3">
											<div class="input-block local-forms">
												<label >State/Province <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select State</option>
													<option>Alaska</option>
													<option>California</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3">
											<div class="input-block local-forms">
												<label >Postal Code <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="" >
											</div>
										</div>
										<div class="col-12 col-sm-12">
											<div class="input-block local-forms">
												<label>Start Biography  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30"></textarea>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-top-form">
												<label class="local-top">Avatar <span class="login-danger">*</span></label>
												<div class="settings-btn upload-files-avator">
													<input type="file" accept="image/*" name="image" id="file" onchange="if (!window.__cfRLUnblockHandlers) return false; loadFile(event)" class="hide-input" data-cf-modified-3361286fab073aa18b96d427-="">
													<label for="file" class="upload">Choose File</label>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block select-gender">
												<label class="gen-label">Status <span class="login-danger">*</span></label>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="gender" class="form-check-input mt-0">Active
													</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="gender" class="form-check-input mt-0">In Active
													</label>
												</div>
											</div>
										</div>-->
										<div class="col-12">
											<div class="doctor-submit text-end">
												<button type="submit" name="update" class="btn btn-primary submit-form me-2">Submit</button>
												
											</div>
										</div>
									</div>
								</form>

								<?php
                                if (isset($_POST['update']))
                                {
                                    $dfname=$_POST['dfname'];
									$dlname=$_POST['dlname'];
									$duname=$_POST['duname'];
                                    $dnumber=$_POST['dnumber'];
                                    $demail=$_POST['demail'];
									$dpassword=$_POST['dpassword'];
                
                                    $ddob=$_POST['ddob'];
                                    $dgender=$_POST['dgender'];
                                    $dedu=$_POST['dedu'];
                                    $ddepart=$_POST['ddepart'];
									$daddress=$_POST['daddress'];


                                $update="UPDATE doctor SET dfname='$dfname',dlname='$dlname', duname='$duname',dnumber='$dnumber',demail='$demail',dpassword='$dpassword',ddob='$ddob',dgender='$dgender',dedu='$dedu',ddepart='$ddepart',daddress='$daddress' WHERE id='$id'";

								
                                $data=mysqli_query($conn,$update);
                                if($data){
                                    ?>
                                    <script type="text/javascript">
                                        alert("data update successfully");
                                        window.open("doctors.php","_self");
                                    </script>
                                    <?php
                                }else{
                                    ?>
                                    <script type="text/javascript">
                                        alert("please try again");
                                    </script>
                                    <?php
                                }
                            }
							?>
							</div>
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
	
    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Feather Js -->
	<script src="assets/js/feather.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Slimscroll -->
    <script src="assets/js/jquery.slimscroll.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Select2 Js -->
	<script src="assets/js/select2.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Datepicker Core JS -->
	<script src="assets/plugins/moment/moment.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="605448c69a59fda5526e8987-text/javascript"></script>
	
	<!-- Custom JS -->
    <script src="assets/js/app.js" type="605448c69a59fda5526e8987-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="605448c69a59fda5526e8987-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad65e1ead4710","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:25 GMT -->
</html>