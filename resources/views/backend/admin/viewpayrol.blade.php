@extends('layouts.appadmin')

@section('title')
    Admin - View Payrol -
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <!--Get Details Of A Single User And Display Them Here-->
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                    <li class="breadcrumb-item active">View Employees</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Jessica Spencer's Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card-box text-center">
                            <img src="../doc/assets/images/users/usric.png" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">


                            <div class="text-centre mt-3">

                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Jessica
                                        Spencer</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Department :</strong> <span
                                        class="ml-2">Accounting</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Employee Number :</strong> <span
                                        class="ml-2">5VIFT</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                        class="ml-2">jessica@mail.com</span></p>


                            </div>

                        </div> <!-- end card-box -->

                    </div> <!-- end col-->
                    <!--Vitals-->
                    <div class="col-lg-6 col-xl-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Body Temperature</th>
                                        <th>Heart Rate/Pulse</th>
                                        <th>Respiratory Rate</th>
                                        <th>Blood Pressure</th>
                                        <th>Date Recorded</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
