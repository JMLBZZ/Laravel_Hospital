@extends('layouts.appadmin')

@section('title')
    Admin - Employee Capture Results -
@endsection

@section('content')
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Laboratory</a></li>
                                    <li class="breadcrumb-item active">Capture Vitals</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Capture Jessica Spencer Vitals</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Fill all fields</h4>
                                <!--Add Patient Form-->
                                <form method="post">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Employee Name</label>
                                            <input type="text" required="required" readonly name=""
                                                value="Jessica Spencer" class="form-control" id="inputEmail4"
                                                placeholder="Patient's First Name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Employee Department</label>
                                            <input required="required" type="text" readonly name=""
                                                value="Accounting" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="col-form-label">Employee Number</label>
                                            <input type="text" required="required" readonly name="vit_pat_number"
                                                value="5VIFT" class="form-control" id="inputEmail4"
                                                placeholder="DD/MM/YYYY">
                                        </div>


                                    </div>


                                    <hr>
                                    <div class="form-row">


                                        <div class="form-group col-md-2" style="display:none">
                                            <label for="inputZip" class="col-form-label">Vital Number</label>
                                            <input type="text" name="vit_number" value="YFK6B" class="form-control"
                                                id="inputZip">
                                        </div>
                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4" class="col-form-label">Patient Body Temperature
                                                °C</label>
                                            <input type="text" required="required"
                                                name="vit_bodytemp"class="form-control" id="inputEmail4" placeholder="°C">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Patient Heart Pulse/Beat
                                                BPM</label>
                                            <input required="required" type="text" name="vit_heartpulse"
                                                class="form-control" id="inputPassword4"
                                                placeholder="HeartBeats Per Minute ">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Patient Respiratory Rate
                                                bpm</label>
                                            <input required="required" type="text" name="vit_resprate"
                                                class="form-control" id="inputPassword4" placeholder="Breathes Per Minute">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Patient Blood Pressure
                                                mmHg</label>
                                            <input required="required" type="text" name="vit_bloodpress"
                                                class="form-control" id="inputPassword4" placeholder="mmHg">
                                        </div>

                                    </div>

                                    <button type="submit" name="add_emp_vitals" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Vitals</button>

                                </form>
                                <!--End Patient Form-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
