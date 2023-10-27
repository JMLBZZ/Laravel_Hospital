@extends('layouts.appadmin')

@section('title')
    Admin - Prescription -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                    <li class="breadcrumb-item active">View Prescriptions</li>
                                </ol>
                            </div>
                            <h4 class="page-title">View Prescriptions</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title"></h4>
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2" style="display:none">
                                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                <option value="">Show all</option>
                                                <option value="Discharged">Discharged</option>
                                                <option value="OutPatients">OutPatients</option>
                                                <option value="InPatients">InPatients</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input id="demo-foo-search" type="text" placeholder="Search"
                                                class="form-control form-control-sm" autocomplete="on">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                    data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-toggle="true">Patient Name</th>
                                            <th data-hide="phone">Patient Number</th>
                                            <th data-hide="phone">Patient Address</th>
                                            <th data-hide="phone">Patient Ailment</th>
                                            <th data-hide="phone">Patient Age</th>
                                            <th data-hide="phone">Patient Category</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Christine Moore</td>
                                            <td>4TLG0</td>
                                            <td>117 Bleecker Street</td>
                                            <td>Demo Test</td>
                                            <td>28 Years</td>
                                            <td>InPatient</td>

                                            <td><a href="his_admin_view_single_pres.php?pres_number=09Y2P&&pres_id=6"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View
                                                    Prescription</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Mart Developers</td>
                                            <td>6P8HJ</td>
                                            <td>127001 LocalHost</td>
                                            <td>Fever</td>
                                            <td>23 Years</td>
                                            <td>InPatient</td>

                                            <td><a href="his_admin_view_single_pres.php?pres_number=J9DC6&&pres_id=3"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View
                                                    Prescription</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Lorem Ipsum</td>
                                            <td>7EW0L</td>
                                            <td>12 9001 Machakos</td>
                                            <td>Flu</td>
                                            <td>10 Years</td>
                                            <td>OutPatient</td>

                                            <td><a href="his_admin_view_single_pres.php?pres_number=HQC3D&&pres_id=5"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View
                                                    Prescription</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>John Doe</td>
                                            <td>RAV6C</td>
                                            <td>12 900 NYE</td>
                                            <td>Malaria</td>
                                            <td>30 Years</td>
                                            <td>OutPatient</td>

                                            <td><a href="his_admin_view_single_pres.php?pres_number=HZQ8J&&pres_id=4"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View
                                                    Prescription</a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="active">
                                            <td colspan="8">
                                                <div class="text-right">
                                                    <ul
                                                        class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0">
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div> <!-- end .table-responsive-->
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
