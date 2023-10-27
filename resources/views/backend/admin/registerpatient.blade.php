@extends('layouts.appadmin')

@section('title')
    Admin - Register Patient -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                    <li class="breadcrumb-item active">Add Patient</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Patient Details</h4>
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
                                            <label for="inputEmail4" class="col-form-label">First Name</label>
                                            <input type="text" required="required" name="pat_fname" class="form-control"
                                                id="inputEmail4" placeholder="Patient's First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Last Name</label>
                                            <input required="required" type="text" name="pat_lname" class="form-control"
                                                id="inputPassword4" placeholder="Patient`s Last Name">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                            <input type="text" required="required" name="pat_dob" class="form-control"
                                                id="inputEmail4" placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Age</label>
                                            <input required="required" type="text" name="pat_age" class="form-control"
                                                id="inputPassword4" placeholder="Patient`s Age">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Address</label>
                                        <input required="required" type="text" class="form-control" name="pat_addr"
                                            id="inputAddress" placeholder="Patient's Addresss">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputCity" class="col-form-label">Mobile Number</label>
                                            <input required="required" type="text" name="pat_phone" class="form-control"
                                                id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                            <input required="required" type="text" name="pat_ailment"
                                                class="form-control" id="inputCity">
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
                                        <div class="form-group col-md-2" style="display:none">
                                            <label for="inputZip" class="col-form-label">Patient Number</label>
                                            <input type="text" name="pat_number" value="APMQ5" class="form-control"
                                                id="inputZip">
                                        </div>
                                    </div>

                                    <button type="submit" name="add_patient" class="ladda-button btn btn-primary"
                                        data-style="expand-right">Add Patient</button>

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
