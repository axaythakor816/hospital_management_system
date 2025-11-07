<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 15:12:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Karn - Hospitale</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
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
								<li class="breadcrumb-item"><a href="invoices.php">Accounts </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Edit Invoice</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-sm-12">
					
						<div class="card ">
							<div class="card-body">
								<form>
									<div class="row">
										<div class="col-12">
											<div class="form-heading">
												<h4>Edit Invoice</h4>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">  
											<div class="input-block local-forms">
												<label >Patient Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" value="Bernardo James" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Email <span class="login-danger">*</span></label>
												<input class="form-control" type="email"  value="example@gmail.com" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Department <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select  Department</option>
													<option>Orthopedics</option>
													<option>Radiology</option>
													<option>Dentist</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Tax <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select  Tax</option>
													<option>VAT</option>
													<option>GST</option>
													<option>No GST</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms cal-icon">
												<label >Invoice Date  <span class="login-danger">*</span></label>
												<input class="form-control datetimepicker" type="text" value="01.05.2020" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms cal-icon">
												<label >Due Date <span class="login-danger">*</span></label>
												<input class="form-control datetimepicker" type="text" value="04.05.2020" >
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label>Patient Address  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30">5754 Airport Rd, Coosada, AL, 36020</textarea>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label>Billing  Address  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30">5754 Airport Rd, Coosada, AL, 36020</textarea>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Payment Method <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select Payment Method</option>
													<option>Debit Card</option>
													<option>Gpay</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-md-6 col-xl-6">
											<div class="input-block local-forms">
												<label >Select Payment Status <span class="login-danger">*</span></label>
												<select class="form-control select">
													<option>Select  Tax</option>
													<option>Paid</option>
													<option>Un Paid</option>
													<option>Patially Paid</option>
												  </select>
											</div>
										</div>
										<div class="col-12 col-sm-12">
											<div class="table-responsive">
												<table class="table border-0 custom-table invoices-table">
													<thead>
														<tr>
															<th style="width: 20px">#</th>
															<th class="col-sm-2">Item</th>
															<th class="col-md-6">Description</th>
															<th style="width:100px;">Unit Cost</th>
															<th style="width:80px;">Qty</th>
															<th>Amount</th>
															<th> </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>
																<input class="form-control" type="text" style="min-width:150px" value="Full body checkup">
															</td>
															<td>
																<input class="form-control" type="text" style="min-width:150px" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
															</td>
															<td>
																<input class="form-control" style="width:100px" type="text" value="150">
															</td>
															<td>
																<input class="form-control" style="width:80px" type="text" value="1">
															</td>
															<td>
																<input class="form-control "  style="width:120px" type="text" value="150">
															</td>
															<td><a href="javascript:void(0)" class="text-success font-18 add-table-invoice" title="Add"><i class="fa fa-plus"></i></a></td>
														</tr>
														<tr>
															<td>2</td>
															<td>
																<input class="form-control" type="text" style="min-width:150px" value="Blood Test">
															</td>
															<td>
																<input class="form-control" type="text" style="min-width:150px" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
															</td>
															<td>
																<input class="form-control" style="width:100px" type="text" value="12">
															</td>
															<td>
																<input class="form-control" style="width:80px" type="text" value="1">
															</td>
															<td>
																<input class="form-control "  style="width:120px" type="text" value="120">
															</td>
															<td><a href="javascript:void(0)" class="text-success font-18 add-table-invoice" title="Add"><i class="fa fa-plus"></i></a></td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive custom-table invoices-table">
												<table class="table border-0 grand-totals">
													<tbody>
														<tr>
															<td  class="text-end">Total</td>
															<td >
																<input class="form-control text-end" type="text" value="220">
															</td>
														</tr>
														<tr>
															<td  class="text-end ">Tax</td>
															<td >
																<input class="form-control text-end" type="text" value="0">
															</td>
														</tr>
														<tr class="bold-total">
															<td  class="text-end">
																Grand Total
															</td>
															<td >
																<input class="form-control text-end" type="text" value="$320">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-12">
											<div class="input-block local-forms">
												<label>Other Information  <span class="login-danger">*</span></label>
												<textarea class="form-control" rows="3" cols="30"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="doctor-submit text-end">
												<button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
												<button type="submit" class="btn btn-primary cancel-form">Cancel</button>
											</div>
										</div>
									</div>
								</form>
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
    <script src="assets/js/jquery-3.7.1.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	<script src="assets/js/feather.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
    <script src="assets/js/jquery.slimscroll.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	<script src="assets/js/select2.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	
	<!-- Datepicker Core JS -->
	<script src="assets/plugins/moment/moment.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>
	
    <script src="assets/js/app.js" type="0eb03ac6955bb4e6560d0602-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0eb03ac6955bb4e6560d0602-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cae2240e576eef","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 15:12:15 GMT -->
</html>