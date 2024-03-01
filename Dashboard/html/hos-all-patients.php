<?php
// Database configuration
$host = 'localhost';
$username = 'root'; // Replace with your actual database username
$password = 'root'; // Replace with your actual database password
$database = 'trust'; // Replace with your actual database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Check if the database connection is successful
if ($conn === false) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

// Perform your database query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if ($result === false) {
    die('Query execution failed: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from medash.netlify.app/html/hos-all-patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 06:58:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- 
        * @Package:  Multipurpose Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Multipurpose Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar gradient-blue1'>
        <div class='logo-area crypto'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="topnav-item item1">
                        <a href="#" class="new-link w-text">Schedule
                          <span class="badge badge-primary ml-5">New</span>
                        </a>
                    </li>
                    <li class="topnav-item active item2">
                        <a href="#" class="nav-link w-text">
                          <i class="fa fa-area-chart mr-10"></i>Reports
                        </a>
                    </li>
                    <li class="topnav-item item3">
                        <a href="#" class="nav-link w-text">
                          <i class="fa fa-sitemap mr-10"></i>Trading
                        </a>
                    </li>
                
                    
                    <li class="hidden-sm hidden-xs searchform">
                        <form action="#" method="post">
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            </div>
                            <input type='submit' value="">
                        </form>
                    </li>
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="notify-toggle-wrapper spec">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-accent">3</span>
                        </a>
                        <ul class="dropdown-menu notifications animated fadeIn">
                            <li class="total">
                                <span class="small">
                                You have <strong>3</strong> new notifications.
                                <a href="javascript:;" class="pull-right">Mark all as Read</a>
                            </span>
                            </li>
                            <li class="list">

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Successful Paid Invoice #1683</strong>
                                                    <span class="time small">15 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="unread away">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Confirmed Dr Jack Welly visit</strong>
                                                    <span class="time small">45 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Cancel Appointment at 1:00PM</strong>
                                                    <span class="time small">1 hour ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                   
                                    <li class=" available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Great Speed Notify of 1.34 LTC</strong>
                                                    <span class="time small">14th Mar</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="message-toggle-wrapper spec">
                        <a href="#" data-toggle="dropdown" class="toggle mr-15">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-accent">7</span>
                        </a>
                        <ul class="dropdown-menu messages animated fadeIn">

                            <li class="list">

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Clarine Vassar</strong>
                                                    <span class="time small">- 15 mins ago</span>
                                                <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Brooks Latshaw</strong>
                                                    <span class="time small">- 45 mins ago</span>
                                                <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Clementina Brodeur</strong>
                                                    <span class="time small">- 1 hour ago</span>
                                                <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-4.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Carri Busey</strong>
                                                    <span class="time small">- 5 hours ago</span>
                                                <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-5.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Melissa Dock</strong>
                                                    <span class="time small">- Yesterday</span>
                                                <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Verdell Rea</strong>
                                                    <span class="time small">- 14th Mar</span>
                                                <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Linette Lheureux</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="../data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Araceli Boatright</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="../data/profile/profile.jpg" alt="user-image" class="img-circle img-inline">
                            <span>Arnold Ramsy <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="hos-faq.html">
                                    <i class="fa fa-wrench"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="hos-doctor-profile.html">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="hos-support.html">
                                    <i class="fa fa-info"></i> Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="ui-login.html">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="index-hos-dashboard.html">
                            <i class="img">
                                <img src="../data/hos-dash/icons/1.png" alt="" class="width-20">
                            </i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="hos-patient-dash.html">
                            <i class="img">
                                <img src="../data/hos-dash/icons/3.png" alt="" class="width-20">
                            </i>
                            <span class="title">Patient Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="hos-doctor-dash.html">
                            <i class="img">
                                <img src="../data/hos-dash/icons/4.png" alt="" class="width-20">
                            </i>
                            <span class="title">Doctor Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/2.png" alt="" class="width-20">
                            </i>
                            <span class="title">Doctors</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="hos-all-doctors.html">All Doctors</a>
                            </li>
                            <li>
                                <a class="" href="hos-add-doctor.html">Add Doctor</a>
                            </li>
                            <li>
                                <a class="" href="hos-edit-doctor.html">Edit Doctor</a>
                            </li>
                            <li>
                                <a class="" href="hos-doctor-profile.html">Doctor Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/5.png" alt="" class="width-20">
                            </i>
                            <span class="title">Patients</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="hos-all-patients.php">All Patients</a>
                            </li>
                            <li>
                                <a class="" href="hos-add-patient.html">Add Patient</a>
                            </li>
                            <li>
                                <a class="" href="hos-edit-patient.html">Edit Patient</a>
                            </li>
                            <li>
                                <a class="" href="hos-patient-profile.html">Patient Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/6.png" alt="" class="width-20">
                            </i>
                            <span class="title">Appointments</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="hos-schedule.html">Doctor Schedule</a>
                            </li>
                            <li>
                                <a class="" href="hos-book-appointment.html">Book Appointment</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/7.png" alt="" class="width-20">
                            </i>
                            <span class="title">Billing</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="hos-payment.html">Payments</a>
                            </li>
                            <li>
                                <a class="" href="hos-add-payment.html">Add Payment</a>
                            </li>
                            <li>
                                <a class="" href="hos-patient-invoice.html">Patient Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="hos-events.html">
                            <i class="img">
                                <img src="../data/hos-dash/icons/9.png" alt="" class="width-20">
                            </i>
                            <span class="title">Event Management</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/10.png" alt="" class="width-20">
                            </i>
                            <span class="title">Access Pages</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="ui-login.html">Login</a>
                            </li>
                            <li>
                                <a class="" href="ui-register.html">Registration</a>
                            </li>
                            <li>
                                <a class="" href="ui-404.html">404</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="img">
                                <img src="../data/hos-dash/icons/11.png" alt="" class="width-20">
                            </i>
                            <span class="title">Support</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="hos-faq.html">FAQ</a>
                            </li>
                            <li>
                                <a class="" href="hos-support.html">Help center</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

            <!-- MAIN MENU - END -->

        </div>
        <!--  SIDEBAR - END -->

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" >

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">All Patients</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="container">
                    <div class="row mt-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered text-center">
                                        <tr class="bg-dark text-white">
                                            <td>id</td>
                                            <td>Name</td>
                                            <td>Password</td>
                                            <td>Email</td>
                                            <td>DOB</td>
                                            <td>Phonenumber</td>
                                            <td>Address</td>
                                            
                                        </tr>
                                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['password']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['dateofbirth']; ?></td>
                                                <td><?php echo $row['phonenumber']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                
                                               
                                            </tr>
                                        <?php endwhile; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                

            
                

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->
        <div class="page-chatapi hideit">

            <div class="search-bar">
                <input type="text" placeholder="Search" class="form-control">
            </div>

            <div class="chat-wrapper">

                <h4 class="group-head">Favourites</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_1' data-user-id='1'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Joge Lucky</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_2' data-user-id='2'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Folisise Chosiel</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_3' data-user-id='3'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Aron Gonzalez</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>

                <h4 class="group-head">More Contacts</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_4' data-user-id='4'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Chris Fox</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_5' data-user-id='5'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Mogen Polish</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_6' data-user-id='6'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Smith Carter</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_7' data-user-id='7'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Amilia Gozenal</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_8' data-user-id='8'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Tahir Jemyship</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_9' data-user-id='9'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Johanson Wright</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_10' data-user-id='10'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Loni Tindall</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_11' data-user-id='11'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Natcho Herlaey</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_12' data-user-id='12'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Shakira Swedan</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="chatapi-windows ">

        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/jquery.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="../assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>


<!-- Mirrored from medash.netlify.app/html/hos-all-patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 06:58:39 GMT -->
</html>