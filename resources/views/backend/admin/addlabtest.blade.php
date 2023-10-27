@extends('layouts.appadmin')

@section('title')
    Admin - Add Lab. Test -
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
                                    <li class="breadcrumb-item active">Add Lab Test</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Lab Test</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" required="required" readonly name="lab_pat_name"
                                                value="Helen Macdougall" class="form-control" id="inputEmail4"
                                                placeholder="Patient's First Name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Ailment</label>
                                            <input required="required" type="text" readonly name="lab_pat_ailment"
                                                value="Test Test" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                            <input type="text" required="required" readonly name="lab_pat_number"
                                                value="K74P3" class="form-control" id="inputEmail4"
                                                placeholder="DD/MM/YYYY">
                                        </div>


                                    </div>


                                    <hr>
                                    <div class="form-row">


                                        <div class="form-group col-md-2" style="display:none">
                                            <label for="inputZip" class="col-form-label">Lab Test Number</label>
                                            <input type="text" name="lab_number" value="DGZLE" class="form-control"
                                                id="inputZip">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Laboratory Tests</label>
                                        <textarea required="required" type="text" class="form-control" name="lab_pat_tests" id="editor"></textarea>
                                    </div>

                                    <button type="submit" name="add_patient_lab_test" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Laboratory Test</button>

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
