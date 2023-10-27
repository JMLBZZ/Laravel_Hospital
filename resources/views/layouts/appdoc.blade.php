<!DOCTYPE html>
<html lang="en">

<!--Head Code-->

<head>
    <meta charset="utf-8" />
    <title>Hospital Management Information System -A Super Responsive Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="backend/doc/images/favicon.ico">

    <!-- Plugins css -->
    <link href="backend/doc/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="backend/doc/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="backend/doc/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="backend/doc/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href="backend/doc/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="backend/doc/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

    <!--Load Sweet Alert Javascript-->
    <script src="backend/doc/js/swal.js"></script>

    <!--Inject SWAL-->


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>


                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="backend/doc/images/users/user-default-2-min.png" alt="dpic" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Bryan Arreola <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <!-- <a href="his_doc_account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>My Account</span>
                    </a> -->

                        <a href="his_doc_update-account.php" class="dropdown-item notify-item">
                            <i class="fas fa-user-tag"></i>
                            <span>Update Account</span>
                        </a>


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="his_doc_logout_partial.php" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>



            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="his_admin_dashboard.php" class="logo text-center">
                    <span class="logo-lg">
                        <img src="backend/doc/images/logo-light.png" alt="" height="18">
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">U</span> -->
                        <img src="backend/doc/images/logo-sm-white.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        Create New
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">


                        <!-- item-->
                        <a href="his_doc_register_patient.php" class="dropdown-item">
                            <i class="fe-activity mr-1"></i>
                            <span>Patient</span>
                        </a>



                        <!-- item-->
                        <a href="his_doc_lab_report.php" class="dropdown-item">
                            <i class="fe-hard-drive mr-1"></i>
                            <span>Laboratory Report</span>
                        </a>


                        <div class="dropdown-divider"></div>


                    </div>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="his_doc_dashboard.php">
                                <i class="fe-airplay"></i>
                                <span> Dashboard </span>
                            </a>

                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="fab fa-accessible-icon "></i>
                                <span> Patients </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="his_doc_register_patient.php">Register Patient</a>
                                </li>
                                <li>
                                    <a href="his_doc_view_patients.php">View Patients</a>
                                </li>
                                <li>
                                    <a href="his_doc_manage_patient.php">Manage Patients</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="his_doc_discharge_patient.php">Discharge Patients</a>
                                </li>
                                <li>
                                    <a href="his_doc_patient_transfer.php">Patient Transfers</a>
                                </li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-pill"></i>
                                <span> Pharmacy </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="his_doc_add_pharm_cat.php">Add Pharm Category</a>
                                </li>
                                <li>
                                    <a href="his_doc_view_pharm_cat.php">View Pharm Category</a>
                                </li>
                                <li>
                                    <a href="his_doc_manage_pharm_cat.php">Manage Pharm Category</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="his_doc_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                </li>
                                <li>
                                    <a href="his_doc_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                </li>
                                <li>
                                    <a href="his_doc_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="his_doc_add_presc.php">Add Prescriptions</a>
                                </li>
                                <li>
                                    <a href="his_doc_view_presc.php">View Prescriptions</a>
                                </li>
                                <li>
                                    <a href="his_doc_manage_presc.php">Manage Prescriptions</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);">
                                <i class=" fas fa-funnel-dollar "></i>
                                <span> Inventory </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li>
                                    <a href="his_doc_pharm_inventory.php">Pharmaceuticals</a>
                                </li>

                                <li>
                                    <a href="his_doc_equipments_inventory.php">backend/doc</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-flask"></i>
                                <span> Laboratory </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="his_doc_patient_lab_test.php">Patient Lab Tests</a>
                                </li>
                                <li>
                                    <a href="his_doc_patient_lab_result.php">Patient Lab Results</a>
                                </li>
                                <li>
                                    <a href="his_doc_patient_lab_vitals.php">Patient Vitals</a>
                                </li>

                                <li>
                                    <a href="his_doc_lab_report.php">Lab Reports</a>
                                </li>
                                <hr>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-cash-refund "></i>
                                <span> Payrolls </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li>
                                    <a href="his_doc_view_payrolls.php">My Payrolls</a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
    </div>
    <!-- END wrapper -->


        <!--Start content-->
            @yield('content')
        <!--End content-->




        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="backend/doc/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="backend/doc/libs/flatpickr/flatpickr.min.js"></script>
        <script src="backend/doc/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="backend/doc/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="backend/doc/libs/flot-charts/jquery.flot.js"></script>
        <script src="backend/doc/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="backend/doc/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="backend/doc/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="backend/doc/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="backend/doc/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="backend/doc/js/app.min.js"></script>

</body>

</html>
