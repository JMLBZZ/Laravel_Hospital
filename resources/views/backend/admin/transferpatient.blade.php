@extends('layouts.appadmin')

@section('title')
    Admin - Transfer Patient -
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
                                    <li class="breadcrumb-item active">Transfer Patients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Transfer Patient To A Refferal Facility</h4>
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
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" required="required" value="Cynthia Connolly"
                                                name="t_pat_name" class="form-control" id="inputEmail4"
                                                placeholder="Patient's First Name">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Refferal Hospital</label>
                                            <input type="text" required="required" name="t_hospital" class="form-control"
                                                id="inputEmail4" placeholder="Refferal/Transfer Hospital">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Transfer Date</label>
                                            <input required="required" type="date" name="t_date" class="form-control"
                                                id="inputPassword4" placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="form-group col-md-6" style="display:none">
                                            <label for="inputPassword4" class="col-form-label">Patient Number </label>
                                            <input required="required" type="text" name="t_pat_number" value="3Z14K"
                                                class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none">
                                        <label for="inputAddress" class="col-form-label">Transfer Status</label>
                                        <input required="required" type="text" value="Success" class="form-control"
                                            name="t_status" id="inputAddress" placeholder="Patient's Addresss">
                                    </div>

                                    <button type="submit" name="transfer_patient" class="ladda-button btn btn-success"
                                        data-style="expand-right">Transfer Patient</button>

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
