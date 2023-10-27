@extends('layouts.appadmin')

@section('title')
    Admin - Update Account Payable -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Accounting</a></li>
                                    <li class="breadcrumb-item active">Manage Payable Account</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Payable Account Details</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Account Name</label>
                                            <input type="text" required="required" value="Individual Retirement Account"
                                                name="acc_name" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Account Amount($)</label>
                                            <input type="text" required="required" value="25000" name="acc_amount"
                                                class="form-control" id="inputEmail4">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputPassword4" class="col-form-label">Account Description</label>
                                        <textarea required="required" type="text" name="acc_desc" class="form-control" id="editor"><p>IRA&rsquo;s are simply an account where you stash your money for retirement. The concept is pretty simple, your account balance is not taxed UNTIL you withdraw, at which point you pay the taxes there. This allows you to grow your account with interest without taxes taking away from the balance. The net result is you earn more money.</p></textarea>
                                    </div>

                                    <div class="form-group" style="display:none">
                                        <label for="inputAddress" class="col-form-label">Account Type</label>
                                        <input required="required" value="Payable Account" type="text"
                                            class="form-control" name="acc_type" id="inputAddress">
                                    </div>

                                    <button type="submit" name="update_acc" class="ladda-button btn btn-warning"
                                        data-style="expand-right">Update Account</button>

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
