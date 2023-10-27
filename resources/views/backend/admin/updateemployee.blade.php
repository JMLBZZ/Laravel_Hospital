@extends('layouts.appadmin')

@section('title')
    Admin - Update Employee -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                    <li class="breadcrumb-item active">Manage Employee</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update Employee Details</h4>
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
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">First Name</label>
                                            <input type="text" required="required" value="Jessica" name="doc_fname"
                                                class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Last Name</label>
                                            <input required="required" type="text" value="Spencer" name="doc_lname"
                                                class="form-control" id="inputPassword4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Email</label>
                                        <input required="required" type="email" value="jessica@mail.com"
                                            class="form-control" name="doc_email" id="inputAddress">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity" class="col-form-label">Password</label>
                                            <input required="required" type="password" name="doc_pwd" class="form-control"
                                                id="inputCity">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputCity" class="col-form-label">Profile Picture</label>
                                            <input required="required" type="file" name="doc_dpic"
                                                class="btn btn-success form-control" id="inputCity">
                                        </div>
                                    </div>

                                    <button type="submit" name="update_doc" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Employee</button>

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
