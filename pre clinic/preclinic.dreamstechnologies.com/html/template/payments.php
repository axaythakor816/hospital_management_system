<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Karn - Hospital</title>
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
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Karn - Hospital</span>
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
								<li class="breadcrumb-item"><a href="payments.php">Accounts </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Payments </li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-sm-12">
					
						<div class="card card-table show-entire">
							<div class="card-body">
							
								<!-- Table Header -->
								<div class="page-table-header mb-2">
									<div class="row align-items-center">
										<div class="col">
											<div class="doctor-table-blk">
												<h3>Payment List</h3>
												<div class="doctor-search-blk">
													<div class="top-nav-search table-search-blk">
														<form>
															<input type="text" class="form-control" placeholder="Search here">
															<a class="btn"><img src="assets/img/icons/search-normal.svg" alt=""></a>
														</form>
													</div>
													<div class="add-group">
														<a href="add-payment.php" class="btn btn-primary add-pluss ms-2"><img src="assets/img/icons/plus.svg" alt=""></a>
														<a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"><img src="assets/img/icons/re-fresh.svg" alt=""></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
											<a href="javascript:;" class=" me-2"><img src="assets/img/icons/pdf-icon-01.svg" alt=""></a>
											<a href="javascript:;" class=" me-2"><img src="assets/img/icons/pdf-icon-02.svg" alt=""></a>
											<a href="javascript:;" class=" me-2"><img src="assets/img/icons/pdf-icon-03.svg" alt=""></a>
											<a href="javascript:;" ><img src="assets/img/icons/pdf-icon-04.svg" alt=""></a>
											
										</div>
									</div>
								</div>
								<!-- /Table Header -->
								<div class="staff-search-table">
									<form>
										<div class="row">
											<div class="col-12 col-md-6 col-xl-4">
												<div class="input-block local-forms cal-icon">
													<label >From </label>
													<input class="form-control datetimepicker" type="text"   >
												</div>
											</div>
											<div class="col-12 col-md-6 col-xl-4">
												<div class="input-block local-forms cal-icon">
													<label >To </label>
													<input class="form-control datetimepicker" type="text"   >
												</div>
											</div>
											<div class="col-12 col-md-6 col-xl-4 ">
												<div class="input-block local-forms">
													<label >Payment Status </label>
													<select class="form-control select">
														<option>Select Payment Status</option>
														<option>Paid</option>
														<option>Un Paid</option>
														<option>Patially Paid</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-md-6 col-xl-4 ms-auto">
												<div class="doctor-submit">
													<button type="submit" class="btn btn-primary submit-list-form me-2">Search</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="table-responsive">
									<table class="table border-0 custom-table comman-table datatable mb-0">
										<thead>
											<tr>
												<th>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</th>
												<th>Invoice Number</th>
												<th>Patient</th>
												<th>Payment Type</th>
												<th>Paid Date</th>
												<th>Paid Amount</th>
												<th>Status</th>
												<th ></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0004</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-01.jpg" class="rounded-circle m-r-5" alt=""> Andrea Lalema</a></td>
												<td>Credit Card</td>
												<td>01.10.2022</td>
												<td>$2450</td>
												<td><button class="custom-badge status-green ">Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0001</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-02.jpg" class="rounded-circle m-r-5" alt=""> Smith Bruklin</a></td>
												<td>Debit Card</td>
												<td>02.10.2022</td>
												<td>$1505</td>
												<td><button class="custom-badge status-pink ">Un Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0002</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-03.jpg" class="rounded-circle m-r-5" alt=""> Bernardo James</a></td>
												<td>Pay Pal</td>
												<td>01.10.2022</td>
												<td>$2000</td>
												<td><button class="custom-badge status-green ">Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0003</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-04.jpg" class="rounded-circle m-r-5" alt=""> Mark Hay Smith</a></td>
												<td>Credit Card</td>
												<td>05.10.2022</td>
												<td>$1000</td>
												<td><button class="custom-badge status-orange ">Patially Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0004</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-05.jpg" class="rounded-circle m-r-5" alt=""> Galaviz Lalema</a></td>
												<td>Debit Card</td>
												<td>01.10.2022</td>
												<td>$2300</td>
												<td><button class="custom-badge status-green ">Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0003</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-06.jpg" class="rounded-circle m-r-5" alt=""> Andrea Lalema</a></td>
												<td>Pay Pal</td>
												<td>05.10.2022</td>
												<td>$4000</td>
												<td><button class="custom-badge status-orange ">Patially Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td><a href="invoice-view.html">#INV-0005</a></td>
												<td class="profile-image"><a href="profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-07.jpg" class="rounded-circle m-r-5" alt=""> William Stephin</a></td>
												<td>Pay Pal</td>
												<td>10.10.2022</td>
												<td>$3000</td>
												<td><button class="custom-badge status-pink ">Un Paid</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-payment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
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
    <script src="assets/js/jquery-3.7.1.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	<script src="assets/js/feather.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
    <script src="assets/js/jquery.slimscroll.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	<script src="assets/js/select2.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	
	<!-- Datepicker Core JS -->
	<script src="assets/plugins/moment/moment.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>
	
    <script src="assets/js/app.js" type="4fd30aa59faf0f2f929a0b5b-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4fd30aa59faf0f2f929a0b5b-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad68a6fae4710","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:38 GMT -->
</html>