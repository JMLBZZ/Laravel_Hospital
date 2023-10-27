@extends('layouts.appadmin')

@section('title')
    Admin - Add Vendor Detail -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Vendor</a></li>
                                    <li class="breadcrumb-item active">Add Vendor</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Vendor Details</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Vendor Name</label>
                                            <input type="text" required="required" name="v_name" class="form-control"
                                                id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Vendor Phone Number</label>
                                            <input required="required" type="text" name="v_phone" class="form-control"
                                                id="inputPassword4">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Vendor Address</label>
                                            <input required="required" type="text" name="v_adr" class="form-control"
                                                id="inputPassword4">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2" style="display:none">
                                        <label for="inputZip" class="col-form-label">Vendor Number</label>
                                        <input type="text" name="v_number" value="01F52" class="form-control"
                                            id="inputZip">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Vendor Email</label>
                                        <input required="required" type="email" class="form-control" name="v_email"
                                            id="inputAddress">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Vendor Details</label>
                                        <textarea type="text" class="form-control" name="v_desc" id="editor"></textarea>
                                    </div>

                                    <button type="submit" name="add_vendor" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Vendor</button>

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
