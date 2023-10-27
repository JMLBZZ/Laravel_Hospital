@extends('layouts.appadmin')

@section('title')
    Admin - Patient Transfer -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                    <li class="breadcrumb-item active">Transfer Patients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Transfer Patients</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Patient's Awaiting Transfers</h4>
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
                                            <th data-toggle="true">Patient</th>
                                            <th data-hide="phone">Patient Number</th>
                                            <th data-hide="phone"> Address</th>
                                            <th data-hide="phone"> Category</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Michael White</td>
                                            <td>DCRI8</td>
                                            <td>60 Radford Street</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_transfer_single_patient.php?pat_number=DCRI8"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Transfer Patient</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Lawrence Bischof</td>
                                            <td>ISL1E</td>
                                            <td>82 Bryan Street</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_transfer_single_patient.php?pat_number=ISL1E"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Transfer Patient</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Cynthia Connolly</td>
                                            <td>3Z14K</td>
                                            <td>9 Hill Haven Drive</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_transfer_single_patient.php?pat_number=3Z14K"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Transfer Patient</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Helen Macdougall</td>
                                            <td>K74P3</td>
                                            <td>28 Holly Street</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_transfer_single_patient.php?pat_number=K74P3"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Transfer Patient</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>5</td>
                                            <td>Christine Moore</td>
                                            <td>4TLG0</td>
                                            <td>117 Bleecker Street</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_transfer_single_patient.php?pat_number=4TLG0"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Transfer Patient</a>
                                            </td>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Transfered Patients</h4>
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
                            <hr>
                            <div class="table-responsive">
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                    data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-toggle="true">Patient Name</th>
                                            <th data-hide="phone">Patient Number</th>
                                            <th data-hide="phone">Transfer Status</th>
                                            <th data-hide="phone">Refferal Hospital</th>
                                            <th data-hide="phone">Transfer Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mart Developers</td>
                                            <td>9KXPM</td>
                                            <td>Success</td>
                                            <td>Kenyatta National Hospital</td>
                                            <td>2020-01-11</td>

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
            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
