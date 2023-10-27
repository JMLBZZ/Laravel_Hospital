@extends('layouts.appadmin')

@section('title')
    Admin - Assign Departement -
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
                                    <li class="breadcrumb-item active">Assign Department</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Assign Department</h4>
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
                                            <input type="text" required="required" readonly value="Aletha"
                                                name="doc_fname" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Last Name</label>
                                            <input required="required" type="text" readonly value="White"
                                                name="doc_lname" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Email</label>
                                        <input required="required" type="email" readonly value="aletha@mail.com"
                                            class="form-control" name="doc_email" id="inputAddress">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Departments</label>
                                        <select id="inputState" required="required" name="doc_dept" class="form-control">
                                            <option>Choose</option>
                                            <option>Patient Registration</option>
                                            <option>Laboratory</option>
                                            <option>Pharmacy</option>
                                            <option>Accounting</option>
                                            <option>Surgery | Theatre</option>
                                        </select>
                                    </div>

                                    <button type="submit" name="assaign_dept" class="ladda-button btn btn-success"
                                        data-style="expand-right">Assign Department</button>

                                </form>
                                <!--End Patient Form-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
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
                                            <input type="text" required="required" readonly value="Bryan"
                                                name="doc_fname" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Last Name</label>
                                            <input required="required" type="text" readonly value="Arreola"
                                                name="doc_lname" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Email</label>
                                        <input required="required" type="email" readonly value="bryan@mail.com"
                                            class="form-control" name="doc_email" id="inputAddress">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Departments</label>
                                        <select id="inputState" required="required" name="doc_dept" class="form-control">
                                            <option>Choose</option>
                                            <option>Patient Registration</option>
                                            <option>Laboratory</option>
                                            <option>Pharmacy</option>
                                            <option>Accounting</option>
                                            <option>Surgery | Theatre</option>
                                        </select>
                                    </div>

                                    <button type="submit" name="assaign_dept" class="ladda-button btn btn-success"
                                        data-style="expand-right">Assign Department</button>

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
