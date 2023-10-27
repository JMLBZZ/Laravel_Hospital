@extends('layouts.appadmin')

@section('title')
    Admin - Update Medical Records -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Medical Records</a></li>
                                    <li class="breadcrumb-item active">Manage Medical Record</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update Medical Record</h4>
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

                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" required="required" readonly name="mdr_pat_name"
                                                value="Michael White" class="form-control" id="inputEmail4"
                                                placeholder="Patient's Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                            <input required="required" type="text" name="mdr_pat_age" value="30"
                                                class="form-control" id="inputPassword4" placeholder="Patient`s Last Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                            <input required="required" type="text" name="mdr_pat_adr"
                                                value="60 Radford Street" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                            <input type="text" required="required" readonly name="mdr_pat_number"
                                                value="DCRI8" class="form-control" id="inputEmail4"
                                                placeholder="DD/MM/YYYY">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Ailment</label>
                                            <input required="required" type="text" name="mdr_pat_ailment"
                                                value="Demo Test" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Age">
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-row">


                                        <div class="form-group col-md-2" style="display:none">
                                            <label for="inputZip" class="col-form-label">Medical Record Number</label>
                                            <input type="text" name="mdr_number" value="HMTN7" class="form-control"
                                                id="inputZip">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Patient's Prescription</label>
                                        <textarea required="required" type="text" class="form-control" name="mdr_pat_prescr" id="editor"> </textarea>
                                    </div>

                                    <button type="submit" name="update_patient_mdr" class="ladda-button btn btn-warning"
                                        data-style="expand-right">Update Patient Medical Record</button>

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
