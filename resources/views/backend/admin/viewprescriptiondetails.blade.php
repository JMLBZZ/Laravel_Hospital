@extends('layouts.appadmin')

@section('title')
    Admin - View Prescription Details -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                    <li class="breadcrumb-item active">View Patients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Michael White's Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box text-center">
                            <img src="assets/images/users/patient.png" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">


                            <div class="text-left mt-3">

                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Michael
                                        White</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span
                                        class="ml-2">1458887854</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Address :</strong> <span class="ml-2">60
                                        Radford Street</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Date Of Birth :</strong> <span
                                        class="ml-2">02/02/1992</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Age :</strong> <span class="ml-2">30
                                        Years</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Ailment :</strong> <span class="ml-2">Demo
                                        Test</span></p>
                                <hr>
                                <p class="text-muted mb-2 font-13"><strong>Date Recorded :</strong> <span
                                        class="ml-2">21/03/2023 - 02:03</span></p>
                                <hr>




                            </div>

                        </div> <!-- end card-box -->

                    </div> <!-- end col-->

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">
                            <ul class="nav nav-pills navtab-bg nav-justified">
                                <li class="nav-item">
                                    <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Prescription
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                        Vitals
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        Lab Records
                                    </a>
                                </li>
                            </ul>
                            <!--Medical History-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="aboutme">
                                    <ul class="list-unstyled timeline-sm">
                                        <li class="timeline-sm-item">
                                            <span class="timeline-sm-date">2023-04-14</span>
                                            <h5 class="mt-0 mb-1">Demo Test</h5>
                                            <p class="text-muted mt-2">
                                                Vous devez prendre 3 comprimés pendant trois jours. </p>

                                        </li>
                                    </ul>

                                </div> <!-- end tab-pane -->
                                <!-- end Prescription section content -->

                                <div class="tab-pane show " id="timeline">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Body Temperature</th>
                                                    <th>Heart Rate/Pulse</th>
                                                    <th>Respiratory Rate</th>
                                                    <th>Blood Pressure</th>
                                                    <th>Date Recorded</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>37°C</td>
                                                    <td>3BPM</td>
                                                    <td>3bpm</td>
                                                    <td>3mmHg</td>
                                                    <td>2023-04-14</td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td>37°C</td>
                                                    <td>4BPM</td>
                                                    <td>4bpm</td>
                                                    <td>4mmHg</td>
                                                    <td>2023-04-14</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end vitals content-->

                                <div class="tab-pane" id="settings">
                                    <ul class="list-unstyled timeline-sm">
                                    </ul>
                                </div>
                            </div>
                            <!-- end lab records content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card-box-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

    </div>


    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
