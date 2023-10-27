@extends('layouts.appadmin')

@section('title')
    Admin - Patient Ladd Result -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Laboratory</a></li>
                                    <li class="breadcrumb-item active">Add Laboratory Result</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Patient Details</h4>
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
                                            <th data-hide="phone">Patient Ailment</th>
                                            <th data-hide="phone">Date Lab Test Conducted</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cynthia Connolly</td>
                                            <td>3Z14K</td>
                                            <td>Demo Test</td>
                                            <td>20/10/2022</td>
                                            <td><a href="his_admin_add_single_lab_result.php?lab_number=G0VZU"
                                                    class="badge badge-success"><i class="mdi mdi-flask"></i> Add Lab
                                                    Result</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Lorem Ipsum </td>
                                            <td>7EW0L</td>
                                            <td>Flu</td>
                                            <td>12/01/2020</td>
                                            <td><a href="his_admin_add_single_lab_result.php?lab_number=K67PL"
                                                    class="badge badge-success"><i class="mdi mdi-flask"></i> Add Lab
                                                    Result</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Mart Developers</td>
                                            <td>6P8HJ</td>
                                            <td>Fever</td>
                                            <td>12/01/2020</td>
                                            <td><a href="his_admin_add_single_lab_result.php?lab_number=9DMN5"
                                                    class="badge badge-success"><i class="mdi mdi-flask"></i> Add Lab
                                                    Result</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>John Doe</td>
                                            <td>RAV6C</td>
                                            <td>Malaria</td>
                                            <td>13/01/2020</td>
                                            <td><a href="his_admin_add_single_lab_result.php?lab_number=90ZNX"
                                                    class="badge badge-success"><i class="mdi mdi-flask"></i> Add Lab
                                                    Result</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>5</td>
                                            <td>Christine Moore</td>
                                            <td>4TLG0</td>
                                            <td>Demo Test</td>
                                            <td>22/10/2022</td>
                                            <td><a href="his_admin_add_single_lab_result.php?lab_number=RA4UM"
                                                    class="badge badge-success"><i class="mdi mdi-flask"></i> Add Lab
                                                    Result</a></td>
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
