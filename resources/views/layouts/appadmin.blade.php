<!DOCTYPE html>
<html lang="en">

<!--Head Code-->

<head>
    <meta charset="utf-8" />
    <title>@yield('title') Hospital Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/admin/images/favicon.ico')}}">

    <!-- Plugins css -->
    <link href="{{ asset('backend/admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('backend/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href="{{ asset('backend/admin/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="{{ asset('backend/admin/libs/footable/footable.core.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Load Sweet Alert Javascript-->
    <script src="{{ asset('backend/admin/js/swal.js')}}"></script>

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
                        <img src="backend/admin/images/users/doc-icon.png" alt="dpic" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            System Administrator <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <a href="his_admin_logout_partial.php" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="dashboard.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="backend/admin/images/logo-light.png" alt="" height="18">
                    </span>
                    <span class="logo-sm">
                        <img src="backend/admin/images/logo-sm-white.png" alt="" height="24">
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
                        <a href="addemployee.html" class="dropdown-item">
                            <i class="fe-users mr-1"></i>
                            <span>Employee</span>
                        </a>

                        <!-- item-->
                        <a href="registerpatient.html" class="dropdown-item">
                            <i class="fe-activity mr-1"></i>
                            <span>Patient</span>
                        </a>

                        <!-- item-->
                        <a href="addpayrol.html" class="dropdown-item">
                            <i class="fe-layers mr-1"></i>
                            <span>Payroll</span>
                        </a>

                        <!-- item-->
                        <a href="addvendorredetails.html" class="dropdown-item">
                            <i class="fe-shopping-cart mr-1"></i>
                            <span>Vendor</span>
                        </a>


                        <!-- item-->
                        <a href="addmedicalrecord.html" class="dropdown-item">
                            <i class="fe-list mr-1"></i>
                            <span>Medical Report</span>
                        </a>

                        <!-- item-->
                        <a href="addlabreport.html" class="dropdown-item">
                            <i class="fe-hard-drive mr-1"></i>
                            <span>Laboratory Report</span>
                        </a>

                        <!-- item-->
                        <a href="surgeyrecord.html" class="dropdown-item">
                            <i class="fe-anchor mr-1"></i>
                            <span>Surgical/Theatre Report</span>
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
                            <a href="dashboard.html">
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
                                    <a href="registerpatient.html">Register Patient</a>
                                </li>
                                <li>
                                    <a href="viewpatients.html">View Patients</a>
                                </li>
                                <li>
                                    <a href="managepatient.html">Manage Patients</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="discharge.html">Discharge Patients</a>
                                </li>
                                <li>
                                    <a href="patienttransfer.html">Patient Transfers</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-doctor"></i>
                                <span> Employees </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="addemployee.html">Add Employee</a>
                                </li>
                                <li>
                                    <a href="viewemployees.html">View Employees</a>
                                </li>
                                <li>
                                    <a href="manageemployee.html">Manage Employees</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="assigndepartement.html">Assign Department</a>
                                </li>
                                <li>
                                    <a href="transferemployee.html">Transfer Employee</a>
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
                                    <a href="addpharmacycategory.html">Add Pharm Category</a>
                                </li>
                                <li>
                                    <a href="viewpharmacycategory.html">View Pharm Category</a>
                                </li>
                                <li>
                                    <a href="managepharmacycategory.html">Manage Pharm Category</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="addpharmaceutical.html">Add Pharmaceuticals</a>
                                </li>
                                <li>
                                    <a href="viewpharmaceutical.html">View Pharmaceuticals</a>
                                </li>
                                <li>
                                    <a href="managepharmaceutical.html">Manage Pharmaceuticals</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="addprescription.html">Add Prescriptions</a>
                                </li>
                                <li>
                                    <a href="viewprescription.html">View Prescriptions</a>
                                </li>
                                <li>
                                    <a href="manageprescription.html">Manage Prescriptions</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-cash-multiple "></i>
                                <span> Accounting </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="addaccountpayable.html">Add Acc. Payable</a>
                                </li>
                                <li>
                                    <a href="manageaccountpayable.html">Manage Acc. Payable</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="addreceivable.html">Add Acc. Receivable</a>
                                </li>
                                <li>
                                    <a href="manageaccountreceivable.html">Manage Acc. Receivable</a>
                                </li>
                                <hr>


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
                                    <a href="inventorypharmaceuticals.html">Pharmaceuticals</a>
                                </li>

                                <li>
                                    <a href="invetorybackend/admin.html">backend/admin</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-share"></i>
                                <span> Reporting </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="inpatientrecords.html">InPatient Records</a>
                                </li>
                                <li>
                                    <a href="his_admin_outpatient_records.php">OutPatient Records</a>
                                </li>
                                <li>
                                    <a href="employeerecords.html">Employee Records</a>
                                </li>
                                <li>
                                    <a href="pharmaceuticalrecords.html">Pharmaceutical Records</a>
                                </li>
                                <li>
                                    <a href="accountrecords.html">Accounting Records</a>
                                </li>
                                <li>
                                    <a href="medicalrecord.html">Medical Records</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-file-text"></i>
                                <span> Medical Records </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="addmedicalrecord.html">Add Medical Record</a>
                                </li>
                                <li>
                                    <a href="managemedicalrecord.html">Manage Medical Records</a>
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
                                    <a href="patientlabtest.html">Patient Lab Tests</a>
                                </li>
                                <li>
                                    <a href="patientladdresults.html">Patient Lab Results</a>
                                </li>
                                <li>
                                    <a href="patientvitals.html">Patient Vitals</a>
                                </li>
                                <li>
                                    <a href="employeevitals.html">Employee Vitals</a>
                                </li>
                                <li>
                                    <a href="labreports.html">Lab Reports</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="addlabreport.html">Add Lab Equipment</a>
                                </li>
                                <li>
                                    <a href="managelabequipment.html">Manage Lab Equipments</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-scissors-cutting "></i>
                                <span> Surgical / Theatre </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="addequipment.html">Add Equipment</a>
                                </li>
                                <li>
                                    <a href="manageequipment.html">Manage Equipments</a>
                                </li>
                                <li>
                                    <a href="his_admin_add_theatre_patient.php">Add Patient</a>
                                </li>
                                <li>
                                    <a href="managepatient.html">Manage Patients</a>
                                </li>

                                <li>
                                    <a href="surgeyrecord.html">Surgery Records</a>
                                </li>
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
                                    <a href="addpayrol.html">Add Payroll</a>
                                </li>
                                <li>
                                    <a href="managepayrol.html">Manage Payrolls</a>
                                </li>
                                <li>
                                    <a href="payrolgeneration.html">Generate Payrolls</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="fas fa-user-tag"></i>
                                <span> Vendors </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="addvendorredetails.html">Add Vendor</a>
                                </li>
                                <li>
                                    <a href="managevendor.html">Manage Vendors</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="fas fa-lock"></i>
                                <span> Password Resets </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="passwordrecords.html">Manage</a>
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




        <!--Start content-->
            @yield('content')
        <!--End content-->



    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="backend/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                <p class="text-muted mb-0"><small>Admin Head</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h5 class="pl-3">Basic Settings</h5>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox1" type="checkbox" checked>
                    <label for="Rcheckbox1">
                        Notifications
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox2" type="checkbox" checked>
                    <label for="Rcheckbox2">
                        API Access
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox3" type="checkbox">
                    <label for="Rcheckbox3">
                        Auto Updates
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox4" type="checkbox" checked>
                    <label for="Rcheckbox4">
                        Online Status
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-0">
                    <input id="Rcheckbox5" type="checkbox" checked>
                    <label for="Rcheckbox5">
                        Auto Payout
                    </label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0" />
            <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0" />
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="backend/admin/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a>
                        </p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="backend/admin/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Stillnotdavid</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="backend/admin/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a>
                        </p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="backend/admin/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="backend/admin/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Adhamdannaway</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('layouts.admin.footer')


    <!-- Vendor js -->
    <script src="{{ asset('backend/admin/js/vendor.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('backend/admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/flot-charts/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/flot-charts/jquery.flot.selection.js')}}"></script>
    <script src="{{ asset('backend/admin/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('backend/admin/js/pages/dashboard-1.init.js')}}"></script>

    <!-- App js-->
    <script src="{{ asset('backend/admin/js/app.min.js')}}"></script>

</body>

</html>
