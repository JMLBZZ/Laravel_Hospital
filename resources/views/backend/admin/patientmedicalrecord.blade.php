@extends('layouts.appadmin')

@section('title')
    Admin - Patient Medical Record -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Medical Records</a></li>
                                    <li class="breadcrumb-item active">Add Medical Records</li>
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
                                            <th data-toggle="true">Name</th>
                                            <th data-hide="phone">Number</th>
                                            <th data-hide="phone">Address</th>
                                            <th data-hide="phone">Phone</th>
                                            <th data-hide="phone">Age</th>
                                            <th data-hide="phone">Category</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Christine Moore</td>
                                            <td>P4MLA</td>
                                            <td>117 Bleecker Street</td>
                                            <td>7412569698</td>
                                            <td>28 Years</td>
                                            <td>InPatient</td>

                                            <td><a href="his_admin_add_single_patient_medical_record.php?pat_number=P4MLA"
                                                    class="badge badge-success"><i class=" fas fa-file-signature"></i> Add
                                                    Medical Record</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Helen Macdougall</td>
                                            <td>K74P3</td>
                                            <td>28 Holly Street</td>
                                            <td>1458889655</td>
                                            <td>42 Years</td>
                                            <td>InPatient</td>

                                            <td><a href="his_admin_add_single_patient_medical_record.php?pat_number=K74P3"
                                                    class="badge badge-success"><i class=" fas fa-file-signature"></i> Add
                                                    Medical Record</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Michael White</td>
                                            <td>3GVJL</td>
                                            <td>60 Radford Street</td>
                                            <td>1458887854</td>
                                            <td>30 Years</td>
                                            <td>OutPatient</td>

                                            <td><a href="his_admin_add_single_patient_medical_record.php?pat_number=3GVJL"
                                                    class="badge badge-success"><i class=" fas fa-file-signature"></i> Add
                                                    Medical Record</a></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Cynthia Connolly</td>
                                            <td>JXADI</td>
                                            <td>9 Hill Haven Drive</td>
                                            <td>1478885458</td>
                                            <td>22 Years</td>
                                            <td>InPatient</td>

                                            <td><a href="his_admin_add_single_patient_medical_record.php?pat_number=JXADI"
                                                    class="badge badge-success"><i class=" fas fa-file-signature"></i> Add
                                                    Medical Record</a></td>
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
