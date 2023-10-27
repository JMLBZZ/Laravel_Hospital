@extends('layouts.appadmin')

@section('title')
    Admin - Manage Medical Record -
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
                                    <li class="breadcrumb-item active">Manage Medical Records</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Manage Medical Records</h4>
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
                                            <th data-hide="phone">Address</th>
                                            <th data-hide="phone">Ailment</th>
                                            <th data-hide="phone">Age</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>RAV6C</td>
                                            <td>12 900 Los Angeles</td>
                                            <td>Malaria</td>
                                            <td>35 Years</td>
                                            <td>
                                                <a href="his_admin_view_single_medical_record.php?mdr_id=1&&mdr_number=ZNXI4"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View</a>
                                                <a href="his_admin_upate_single_medical_record.php?mdr_number=ZNXI4"
                                                    class="badge badge-warning"><i class="fas fa-eye-dropper "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_medical_record.php?delete_mdr_number=ZNXI4"
                                                    class="badge badge-danger"><i class=" fas fa-trash-alt "></i> Delete</a>

                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Cynthia Connolly</td>
                                            <td>3Z14K</td>
                                            <td>9 Hill Haven Drive</td>
                                            <td>Demo Test</td>
                                            <td>22 Years</td>
                                            <td>
                                                <a href="his_admin_view_single_medical_record.php?mdr_id=2&&mdr_number=MIA9P"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View</a>
                                                <a href="his_admin_upate_single_medical_record.php?mdr_number=MIA9P"
                                                    class="badge badge-warning"><i class="fas fa-eye-dropper "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_medical_record.php?delete_mdr_number=MIA9P"
                                                    class="badge badge-danger"><i class=" fas fa-trash-alt "></i> Delete</a>

                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Michael White</td>
                                            <td>DCRI8</td>
                                            <td>60 Radford Street</td>
                                            <td>Demo Test</td>
                                            <td>30 Years</td>
                                            <td>
                                                <a href="his_admin_view_single_medical_record.php?mdr_id=3&&mdr_number=F1ZHQ"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View</a>
                                                <a href="his_admin_upate_single_medical_record.php?mdr_number=F1ZHQ"
                                                    class="badge badge-warning"><i class="fas fa-eye-dropper "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_medical_record.php?delete_mdr_number=F1ZHQ"
                                                    class="badge badge-danger"><i class=" fas fa-trash-alt "></i> Delete</a>

                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Lawrence Bischof</td>
                                            <td>ISL1E</td>
                                            <td>82 Bryan Street</td>
                                            <td>Demo Test</td>
                                            <td>32 Years</td>
                                            <td>
                                                <a href="his_admin_view_single_medical_record.php?mdr_id=4&&mdr_number=ZLN0Q"
                                                    class="badge badge-success"><i class="fas fa-eye"></i> View</a>
                                                <a href="his_admin_upate_single_medical_record.php?mdr_number=ZLN0Q"
                                                    class="badge badge-warning"><i class="fas fa-eye-dropper "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_medical_record.php?delete_mdr_number=ZLN0Q"
                                                    class="badge badge-danger"><i class=" fas fa-trash-alt "></i> Delete</a>

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

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
