@extends('layouts.appadmin')

@section('title')
    Admin - Update Payrol -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Payrolls</a></li>
                                    <li class="breadcrumb-item active">Update Payroll Record</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update Employee Payroll Record</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Employee Name</label>
                                            <input type="text" required="required" readonly name="pay_doc_name"
                                                value="Jessica Spencer" class="form-control" id="inputEmail4"
                                                placeholder="Patient's Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Employee Email</label>
                                            <input required="required" type="text" readonly name="pay_doc_email"
                                                value="jessica@mail.com" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="col-form-label">Employee Number</label>
                                            <input required="required" type="text" readonly name="pay_doc_number"
                                                value="5VIFT" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Employee Salary ($)</label>
                                            <input type="text" required="required" name="pay_emp_salary" value="4150"
                                                class="form-control" id="inputEmail4">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Payroll Status</label>
                                            <select id="inputState" required="required" name="pay_status"
                                                class="form-control">
                                                <option>Choose</option>
                                                <option>Paid</option>
                                                <option>Unpaid</option>
                                            </select>
                                        </div>


                                    </div>

                                    <hr>


                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Payroll Description</label>
                                        <textarea type="text" class="form-control" name="pay_descr" id="editor"> <p>This is a demo payroll description for test!!</p></textarea>
                                    </div>

                                    <button type="submit" name="update_payroll" class="ladda-button btn btn-primary"
                                        data-style="expand-right">Update Payroll Record</button>

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
