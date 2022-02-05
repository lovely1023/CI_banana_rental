
<!-- Header -->
<div class="header">

	<!-- Logo -->
    <div class="header-left">
        <a href="/" class="logo">
			<img src="assets/img/logo.png" width="40" height="40" alt="">
		</a>
    </div>
	<!-- /Logo -->
	
	<a id="toggle_btn" href="javascript:void(0);">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	
	<!-- Header Title -->
    <div class="page-title-box">
		<h3>Dreamguy's Technologies</h3>
    </div>
	<!-- /Header Title -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
	
	<!-- Header Menu -->
	<ul class="nav user-menu">
	
	
		<!-- Flag -->
		<li class="nav-item dropdown has-arrow flag-nav">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
				<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="assets/img/flags/us.png" alt="" height="16"> English
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="assets/img/flags/de.png" alt="" height="16"> German
				</a>
			</div>
		</li>
		<!-- /Flag -->
	
		<!-- Notifications -->
		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fa fa-bell-o"></i> <span class="badge badge-pill">1</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Notifications</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="#">
								<div class="media">
									<span class="avatar">
										<img alt="" src="assets/img/profiles/avatar-05.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
										<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">View all Notifications</a>
				</div>
			</div>
		</li>
		<!-- /Notifications -->
		
		<!-- Message Notifications -->
		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fa fa-comment-o"></i> <span class="badge badge-pill">1</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Messages</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="assets/img/profiles/avatar-05.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author">Mike Litorus</span>
										<span class="message-time">3 Mar</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">View all Messages</a>
				</div>
			</div>
		</li>
		<!-- /Message Notifications -->

		<li class="nav-item dropdown has-arrow main-drop">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img"><img src="assets/img/profiles/avatar-20.jpg" alt="">
				<span class="status online"></span></span>
				<span>Admin</span>
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">My Profile</a>
				<a class="dropdown-item" href="#">Settings</a>
				<a class="dropdown-item" href="/index.php/login_C/log_out">Logout</a>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	
</div>
<!-- /Header -->
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">Admin Dashboard</a></li>
						<li><a href="#">Employee Dashboard</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">Chat</a></li>
						<li class="submenu">
							<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="#">Voice Call</a></li>
								<li><a href="#">Video Call</a></li>
								<li><a href="#">Outgoing Call</a></li>
								<li><a href="#">Incoming Call</a></li>
							</ul>
						</li>
						<li><a href="#">Calendar</a></li>
						<li><a href="#">Contacts</a></li>
						<li><a href="#">Email</a></li>
						<li><a href="#">File Manager</a></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>Employees</span>
				</li>
				<li class="submenu">
					<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">All Employees</a></li>
						<li><a href="#">Holidays</a></li>
						<li><a href="#">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
						<li><a href="#">Leaves (Employee)</a></li>
						<li><a href="#">Leave Settings</a></li>
						<li><a href="#">Attendance (Admin)</a></li>
						<li><a href="#">Attendance (Employee)</a></li>
						<li><a href="#">Departments</a></li>
						<li><a href="#">Designations</a></li>
						<li><a href="#">Timesheet</a></li>
						<li><a href="#">Overtime</a></li>
					</ul>
				</li>
				<li> 
					<a href="#"><i class="la la-users"></i> <span>Clients</span></a>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">Projects</a></li>
						<li><a href="#">Tasks</a></li>
						<li><a href="#">Task Board</a></li>
					</ul>
				</li>
				<li> 
					<a href="#"><i class="la la-user-secret"></i> <span>Leads</span></a>
				</li>
				<li> 
					<a href="#"><i class="la la-ticket"></i> <span>Tickets</span></a>
				</li>
				<li class="menu-title"> 
					<span>HR</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">Estimates</a></li>
						<li><a href="#">Invoices</a></li>
						<li><a href="#">Payments</a></li>
						<li><a href="#">Expenses</a></li>
						<li><a href="#">Provident Fund</a></li>
						<li><a href="#">Taxes</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Employee Salary </a></li>
						<li><a href="#"> Payslip </a></li>
						<li><a href="#"> Payroll Items </a></li>
					</ul>
				</li>
				<li> 
					<a href="#"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Expense Report </a></li>
						<li><a href="#"> Invoice Report </a></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>Performance</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Performance Indicator </a></li>
						<li><a href="#"> Performance Review </a></li>
						<li><a href="#"> Performance Appraisal </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Goal List </a></li>
						<li><a href="#"> Goal Type </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Training List </a></li>
						<li><a href="#"> Trainers</a></li>
						<li><a href="#"> Training Type </a></li>
					</ul>
				</li>
				<li><a href="#"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
				<li><a href="#"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
				<li><a href="#"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
				<li class="menu-title"> 
					<span>Administration</span>
				</li>
				<li> 
					<a href="#"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Manage Jobs </a></li>
						<li><a href="#"> Applied Candidates </a></li>
					</ul>
				</li>
				<li> 
					<a href="#"><i class="la la-question"></i> <span>Knowledgebase</span></a>
				</li>
				<li> 
					<a href="#"><i class="la la-bell"></i> <span>Activities</span></a>
				</li>
				<li> 
					<a href="#"><i class="la la-user-plus"></i> <span>Users</span></a>
				</li>
				<li> 
					<a href="#"><i class="la la-cog"></i> <span>Settings</span></a>
				</li>
				<li class="menu-title"> 
					<span>Pages</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Employee Profile </a></li>
						<li><a href="#"> Client Profile </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Login </a></li>
						<li><a href="#"> Register </a></li>
						<li><a href="#"> Forgot Password </a></li>
						<li><a href="#"> OTP </a></li>
						<li><a href="#"> Lock Screen </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">404 Error </a></li>
						<li><a href="#">500 Error </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Subscriptions (Admin) </a></li>
						<li><a href="#"> Subscriptions (Company) </a></li>
						<li><a href="#"> Subscribed Companies</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#"> Search </a></li>
						<li><a href="#"> FAQ </a></li>
						<li><a href="#"> Terms </a></li>
						<li><a href="#"> Privacy Policy </a></li>
						<li><a href="#"> Blank Page </a></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>UI Interface</span>
				</li>
				<li> 
					<a href="#"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="#">Basic Inputs </a></li>
						<li><a href="#">Input Groups </a></li>
						<li><a href="#">Horizontal Form </a></li>
						<li><a href="#"> Vertical Form </a></li>
						<li><a href="#"> Form Mask </a></li>
						<li><a href="#"> Form Validation </a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="active" href="#">Basic Tables </a></li>
						<li><a href="#">Data Table </a></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>Extras</span>
				</li>
				<li> 
					<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
				</li>
				<li> 
					<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
				</li>
				<li class="submenu">
					<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li class="submenu">
							<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a href="javascript:void(0);">Level 3</a></li>
										<li><a href="javascript:void(0);">Level 3</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);"> <span>Level 1</span></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
	
		
		<div class="container">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title mb-0">Basic Table</h4>
						<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead style="background: #4dff4d">
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Update</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($user as $row): ?>
								<tr id="<?php echo $row->email; ?>" style="background: #ccffcc;border: 2px solid white">
									<td><?php echo $row->first_name; ?></td>
									<td><?php echo $row->last_name; ?></td>
									<td><?php echo $row->email; ?></td>
									<td><a class="btn btn-sm btn-rounded btn-info" data-toggle="modal" href="#update_modal" onclick="get_email(this)"><i class="fa fa-dot-circle-o text-success"></i>  Update</a></td>
									<td><a class="btn btn-sm btn-rounded btn-white" onclick="delete_u(this)"><i class="fa fa-dot-circle-o text-danger"></i>  Delete</a></td>
								</tr>
								<?php endforeach ?>							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>			
</div>
<!-- /Main Wrapper -->

<div id="update_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Update_Info</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label>First Name</label>
					<input class="form-control" type="text" id="first_nameu" required="">
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input class="form-control" type="text" id="last_nameu" required="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" id="emailu" required="">
				</div>
			</div>
			<div class="modal-footer">
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" onclick="update_new()">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="add_user" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Create_User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label>First Name</label>
					<input class="form-control" type="text" id="first_cname" required="">
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input class="form-control" type="text" id="last_cname" required="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" id="cemail" required="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" id="cpassword" required="">
				</div>
			</div>
			<div class="modal-footer">
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" onclick="add_new()">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	var old_email;
	function add_new() {
		var fnm=$('#first_cname').val();
		var lnm=$('#last_cname').val();
		var eml=$('#cemail').val();
		var pwd=$('#cpassword').val();
		if (fnm=='') {
			$('#first_cname').val('');
			$('#first_cname').focus();return;
		}
		if (lnm=='') {
			$('#last_cname').val('');
			$('#last_cname').focus();return;
		}
		if (eml=='') {
			$('#cemail').val('');
			$('#cemail').focus();return;
		}
		if (pwd=='') {
			$('#cpassword').val('');
			$('#cpassword').focus();return;
		}
		$.post(
			'/index.php/login_C/create_user',
			{
				first_name:fnm,
				last_name:lnm,
				email:eml,
				password:pwd
			},
			function(data,status) {
				$('tbody').append('<tr id="'+eml+'">'+'<td>'+fnm+'</td>'+'<td>'+lnm+'</td>'+'<td>'+eml+'</td><td><a class="btn btn-sm btn-round btn-info" data-toggle="modal" href="#update_modal" onclick="get_email(this)"><i class="fa fa-dot-circle-o text-success"></i>  Update</a></td><td><a class="btn btn-sm btn-round btn-white"  onclick="delete_u(e)"><i class="fa fa-dot-circle-o text-danger"></i>  Delete</a></td></tr>');
				$('#add_user').modal('hide');
			}
		);
	}
	function get_email(e) {
		old_email=$(e).parent().parent().attr('id');
	}
	function update_new() {
		$('#first_nameu').val()
		var ufirst=$('#first_nameu').val();
		var ulast=$('#last_nameu').val();
		var uemail=$('#emailu').val();
		if (ufirst=='') {$('#first_nameu').focus();return;}
		if (ulast=='') {$('#last_nameu').focus();return;}
		if (uemail=='') {$('#emailu').focus();return;}
		$.post(
			'/index.php/login_C/update_u',
			{
				first:ufirst,
				last:ulast,
				email:uemail,
				old_email:old_email
			},
			function(data,status) {
				location.reload();
			}
		);

	}

	function delete_u(e) {
		var str=confirm("Are you really Delete.?");
		if (str==false) {return;alert(0)}
		var del_td=$(e).parent().parent();
		var del_email=$(del_td).attr('id');
		$.post(
			'/index.php/login_C/del_u',
			{
				del_email:del_email
			},
			function(data) {
				$(del_td).remove();
			}
		);
	}
</script>



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Basic Tables - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">



		<link href="assets/css/datatables.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

