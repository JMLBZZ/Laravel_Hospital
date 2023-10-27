@extends('layouts.appadmin')

@section('title')
    Admin - Update Patient Surgery -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Surgery | Theatre</a></li>
                                    <li class="breadcrumb-item active">Manage Patients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Manage Surgery Patient Details</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" readonly required="required" value="John Doe"
                                                name="s_pat_name" class="form-control" id="inputEmail4"
                                                placeholder="Patient's First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Ailment</label>
                                            <input readonly required="required" type="text" value="Malaria"
                                                name="s_pat_ailment" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                            <input readonly type="text" required="required" value="RAV6C"
                                                name="s_pat_number" class="form-control" id="inputEmail4"
                                                placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Surgeon</label>
                                            <select id="inputState" required="required" name="s_doc" class="form-control">
                                                <option>Aletha White</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Surgery Status</label>
                                            <select id="inputState" required="required" name="s_pat_status"
                                                class="form-control">

                                                <option>Ongoing</option>
                                                <option>Successful</option>


                                            </select>
                                        </div>
                                    </div>




                                    <button type="submit" name="update_patient" class="ladda-button btn btn-warning"
                                        data-style="expand-right">Update Patient</button>

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
