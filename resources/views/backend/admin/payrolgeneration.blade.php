@extends('layouts.appadmin')

@section('title')
    Admin - Payrol Generation -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Payrolls</a></li>
                                    <li class="breadcrumb-item active">Generate Payrolls</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Payroll</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <!-- Logo & title -->
                            <div class="clearfix">
                                <div class="float-left">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </div>
                                <div class="float-right">
                                    <h4 class="m-0 d-print-none">Henry Doe Payroll</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <p><b></b></p>
                                        <p class="text-muted"></p>
                                    </div>

                                </div><!-- end col -->
                                <div class="col-md-4 offset-md-2">
                                    <div class="mt-3 float-right">
                                        <p class="m-b-10"><strong>Generated Date : </strong> <span class="float-right">
                                                &nbsp;&nbsp;&nbsp;&nbsp; 20-10-2022 - 06:10:18 </span></p>
                                        <p class="m-b-10"><strong>Payroll Status : </strong> <span class="float-right"><span
                                                    class="badge badge-success">Paid</span></span></p>
                                        <p class="m-b-10"><strong>Payroll Number. : </strong> <span
                                                class="float-right">HUT1B</span></p>
                                        <p class="m-b-10"><strong>Employee Number. : </strong> <span
                                                class="float-right">N8TI0</span></p>

                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->


                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mt-4 table-centered table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Employee Department</th>
                                                    <th style="width: 10%">Salary</th>
                                                    <th style="width: 10%">(PAYE)Tax Rate</th>
                                                    <th style="width: 10%" class="text-right">Total Tax</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>

                                                    </td>
                                                    <td>$ 7555</td>
                                                    <td>16%</td>

                                                    <td class="text-right">$ 1208.8</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="clearfix pt-5">
                                        <h6 class="text-muted">Notes:</h6>

                                        <small class="text-muted">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                                pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                                rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                                mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper
                                                nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra
                                                quis, feugiat a,</p>
                                        </small>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-right">
                                        <p><b>Sub-total:</b> <span class="float-right">$ 7555</span></p>
                                        <p><b>PAYE Tax (16%) :</b> <span class="float-right"> &nbsp;&nbsp;&nbsp; 1208.8
                                            </span></p>
                                        <h3>$ 6346.2</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="mt-4 mb-1">
                                <div class="text-right d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i
                                            class="mdi mdi-printer mr-1"></i> Print</a>
                                </div>
                            </div>
                        </div> <!-- end card-box -->
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
