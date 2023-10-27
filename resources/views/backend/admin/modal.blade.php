<!--A REVOIR LE CODE D'INTÉGRATION DU MODAL-->

<html lang="en"><!--Head-->

<head>
    <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style>
    <meta charset="utf-8">
    <title>Admin - Hospital Management Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="MartDevelopers" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- Loading button css -->
    <link href="assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css">

    <!-- Footable css -->
    <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css">

    <!--Load Sweet Alert Javascript-->
    <script src="assets/js/swal.js"></script>

    <!--Inject SWAL-->
    <!--This code for injecting an alert-->
    <script>
        setTimeout(function() {
                swal("Success", "Patient Details Updated", "success");
            },
            100);
    </script>



    <style type="text/css"></style>
    <script type="text/javascript" src="chrome-extension://flfnfojnbchmpkapielimhjblcmjlloh/inject.js"></script>
</head>

{{--
        <body data-new-gr-c-s-check-loaded="14.1100.0" data-gr-ext-installed="">

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
                                <img src="assets/images/users/user-default-2-min.png" alt="dpic" class="rounded-circle">
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
                                <img src="assets/images/logo-light.png" alt="" height="18">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="assets/images/logo-sm-white.png" alt="" height="24">
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
                <div class="left-side-menu" style="">

                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 969.66px;">
                        <div class="slimscroll-menu" style="overflow: hidden; width: auto; height: 969.66px;">

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
                                        <ul class="nav-second-level collapse" aria-expanded="false">
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
                                        <ul class="nav-second-level collapse" aria-expanded="false">
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
                                        <ul class="nav-second-level collapse" aria-expanded="false">

                                            <li>
                                                <a href="his_doc_pharm_inventory.php">Pharmaceuticals</a>
                                            </li>

                                            <li>
                                                <a href="his_doc_equipments_inventory.php">Assets</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="mdi mdi-flask"></i>
                                            <span> Laboratory </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
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
                                        <ul class="nav-second-level collapse" aria-expanded="false">

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
                        <div class="slimScrollBar"
                            style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 499.646px;">
                        </div>
                        <div class="slimScrollRail"
                            style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                        </div>
                    </div>
                    <!-- Sidebar -left -->

                </div> <!-- Left Sidebar End -->

                <!-- ============================================================== -->
                <!-- Start Page Content here -->
                <!-- ============================================================== -->

                <div class="content-page">
                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                                <li class="breadcrumb-item active">Manage Patients</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Update Patient Details</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
                            <!-- Form row -->
                            <!--LETS GET DETAILS OF SINGLE PATIENT GIVEN THEIR ID-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Fill all fields</h4>
                                            <!--Add Patient Form-->
                                            <form method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="col-form-label">First Name</label>
                                                        <input type="text" required="required" value="Cynthia" name="pat_fname"
                                                            class="form-control" id="inputEmail4"
                                                            placeholder="Patient's First Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Last Name</label>
                                                        <input required="required" type="text" value="Connolly" name="pat_lname"
                                                            class="form-control" id="inputPassword4"
                                                            placeholder="Patient`s Last Name">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                                        <input type="text" required="required" value="10/11/2000" name="pat_dob"
                                                            class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Age</label>
                                                        <input required="required" type="text" value="22" name="pat_age"
                                                            class="form-control" id="inputPassword4"
                                                            placeholder="Patient`s Age">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputAddress" class="col-form-label">Address</label>
                                                    <input required="required" type="text" value="9 Hill Haven Drive"
                                                        class="form-control" name="pat_addr" id="inputAddress"
                                                        placeholder="Patient's Addresss">
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputCity" class="col-form-label">Mobile Number</label>
                                                        <input required="required" type="text" value="1478885458"
                                                            name="pat_phone" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputCity" class="col-form-label">Ailment</label>
                                                        <input required="required" type="text" value="Demo Test"
                                                            name="pat_ailment" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState" class="col-form-label">Patient's Type</label>
                                                        <select id="inputState" required="required" name="pat_type"
                                                            class="form-control">
                                                            <option>Choose</option>
                                                            <option>InPatient</option>
                                                            <option>OutPatient</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <button type="submit" name="update_patient" class="ladda-button btn btn-success"
                                                    data-style="expand-right"><span class="ladda-label">Add Patient</span><span
                                                        class="ladda-spinner"></span></button>

                                            </form>
                                            <!--End Patient Form-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2020 - 2023 © Hospital Management Information System. Developed By Martin Mbithi Nzilani
                                </div>

                            </div>
                        </div>
                    </footer> <!-- end Footer -->

                </div>

                <!-- ============================================================== -->
                <!-- End Page content -->
                <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->


            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!-- App js-->
            <script src="assets/js/app.min.js"></script>

            <!-- Loading buttons js -->
            <script src="assets/libs/ladda/spin.js"></script>

            <!-- <div class="swal-overlay swal-overlay--show-modal" tabindex="-1">
                <div class="swal-modal" role="dialog" aria-modal="true">
                    <div class="swal-icon swal-icon--success">
                        <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                        <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
            
                        <div class="swal-icon--success__ring">
                        </div>
                        <div class="swal-icon--success__hide-corners">
                        </div>
                    </div>
                    <div class="swal-title" style="">Success</div>
                    <div class="swal-text" style="">Patient Details Updated</div>
                    <div class="swal-footer">
                        <div class="swal-button-container">
                            <button class="swal-button swal-button--confirm">OK</button>
                            <div class="swal-button__loader">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->
            <script src="assets/libs/ladda/ladda.js"></script>

            <!-- Buttons init js-->
            <script src="assets/js/pages/loading-btn.init.js"></script>



            <div id="mfa_inject_cartdata" hidden="hidden"></div>
            <div id="mfa_inject" hidden="hidden"></div>

        </body>
--}}
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
