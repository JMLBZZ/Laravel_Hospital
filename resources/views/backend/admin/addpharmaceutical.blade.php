@extends('layouts.appadmin')

@section('title')
    Admin - Add Parmaceutical -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                    <li class="breadcrumb-item active">Add Pharmaceutical</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create A Pharmaceutical</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Pharmaceutical Name</label>
                                            <input type="text" required="required" name="phar_name" class="form-control"
                                                id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Pharmaceutical
                                                Quantity(Cartons)</label>
                                            <input required="required" type="text" name="phar_qty" class="form-control"
                                                id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Pharmaceutical Category</label>
                                            <select id="inputState" required="required" name="phar_cat"
                                                class="form-control">
                                                <!--Fetch All Pharmaceutical Categories-->
                                                <option>Antibiotics</option>
                                                <option>Antipyretics</option>
                                                <option>Analgesics</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Pharmaceutical Vendor</label>
                                            <select id="inputState" required="required" name="phar_vendor"
                                                class="form-control">
                                                <option>Cosmos Pharmaceutical Limited</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-form-label">Pharmaceutical
                                            Barcode(EAN-8)</label>
                                        <input required="required" type="text" value="652394810" name="phar_bcode"
                                            class="form-control" id="inputPassword4">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Pharmaceutical Description</label>
                                        <textarea required="required" type="text" class="form-control" name="phar_desc" id="editor"></textarea>
                                    </div>

                                    <button type="submit" name="add_pharmaceutical" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Pharmaceutical</button>

                                </form>

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
