<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/salary-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:40 GMT -->
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
								<li class="breadcrumb-item"><a href="salary.php">Payroll </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Payslip</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
                            <div class="card-body">
								<div class="Payslip-head">
									<div class="payrolss-counts">
										<h5>Payslip for the Month of October 2022</h4>
										<ul class="nav">
											<li><a href="javascript:;" class=" me-2"><img src="assets/img/icons/pdf-icon-01.svg" alt=""></a></li>
											<li><a href="javascript:;" class=" me-2"><img src="assets/img/icons/pdf-icon-02.svg" alt=""></a></li>
										</ul>
									</div>
								</div>
								<div class="payroll-head-clinic">
									<div class="row">
										<div class="col-12 col-sm-12">
											<div class="invoice-counts">
												<h4>Invoice#345766 <br><span>  Salary Month: July, 2018</span></h4>
												<h4>Status: <a href="javascript:;" class="status-green">Success</a></h4>
											</div>
										</div>
									</div>
								</div>
                                <div class="row custom-invoice">
                                    <div class="col-12 col-md-6 m-b-20">
                                        <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Pre Clinic</span>
                                        <ul class="list-unstyled invoice-clinic mt-2">
                                            <li>3864 Quiet Valley Lane,
                                            <li>Sherman Oaks, CA, 91403</li>
                                            <li>GST No:2914035</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 >Andrea Lalema:</h3>
                                            <h3 >Nurse</h3>
                                            <ul class="list-unstyled invoice-clinic">
												<li>Employee ID: NS-0001</li>
												<li>oining Date: 7 May 2015</li>
												<li><a href="../../cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="b9dbd8cbcbc0daccddd8f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-12 col-md-6 col-xl-6">  
										<div class="payslip-head-roll">
											<h5>Earnings</h5>
										</div>
										<div class="input-block local-forms">
											<label >Basic Salary </label>
											<input class="form-control" type="text" value="$1000" >
										</div>
										<div class="input-block local-forms">
											<label >House Rent Allowance (H.R.A) </label>
											<input class="form-control" type="text" value="$800">
										</div>
										<div class="input-block local-forms">
											<label >Conveyance </label>
											<input class="form-control" type="text" value="$600">
										</div>
										<div class="input-block local-forms">
											<label >Other Allowance </label>
											<input class="form-control" type="text" value="$50">
										</div>
										<div class="input-block local-forms">
											<label >Total Earnings </label>
											<input class="form-control" type="text" value="$16000" >
										</div>
									</div>
									<div class="col-12 col-md-6 col-xl-6">
										<div class="payslip-head-roll">
											<h5>Deductions</h5>
										</div>
										<div class="input-block local-forms">
											<label >Tax Deducted at Source (T.D.S.) </label>
											<input class="form-control" type="text" value="$600">
										</div>
										<div class="input-block local-forms">
											<label >Provident Fund </label>
											<input class="form-control" type="text" value="$500">
										</div>
										<div class="input-block local-forms">
											<label >ESI </label>
											<input class="form-control" type="text" value="$60">
										</div>
										<div class="input-block local-forms">
											<label >Loan</label>
											<input class="form-control" type="text" value="$40">
										</div>
										<div class="input-block local-forms">
											<label >Total Deductions </label>
											<input class="form-control" type="text" value="$300">
										</div>
									</div>
								</div>
								<div class="invoice-info">
									<h5>Net Salary: $59698 (Fifty Nine Thousand Six Hundred and Ninety Eight Only)</h5>
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus.</p>
								</div>
								<div class="col-12">
									<div class="doctor-submit text-end">
										<a href="javascript:;" class="btn btn-primary submit-form me-2">Send Payslip</a>
										<a href="javascript:;" class="btn btn-primary cancel-form"><i class="feather-printer me-2"></i>Print</a>
									</div>
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	<script src="assets/js/feather.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
    <script src="assets/js/jquery.slimscroll.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	<script src="assets/js/select2.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	
	<!-- Datepicker Core JS -->
	<script src="assets/plugins/moment/moment.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>
	
    <script src="assets/js/app.js" type="12a946d3c15c7b774bccc278-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="12a946d3c15c7b774bccc278-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91cad693f9374710","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/salary-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:46:40 GMT -->
</html>h