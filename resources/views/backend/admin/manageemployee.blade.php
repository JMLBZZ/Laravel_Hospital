@extends('layouts.appadmin')

@section('title')
    Admin - Manage Employee -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                    <li class="breadcrumb-item active">Manage Employees</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Manage Employees Details</h4>
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
                                            <th data-hide="phone">Department</th>
                                            <th data-hide="phone">Email</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jessica Spencer</td>
                                            <td>5VIFT</td>
                                            <td>Accounting</td>
                                            <td>jessica@mail.com</td>

                                            <td>
                                                <a href="his_admin_manage_employee.php?delete=12"
                                                    class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i>
                                                    Delete</a>
                                                <a href="his_admin_view_single_employee.php?doc_id=12&&doc_number=5VIFT"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_update_single_employee.php?doc_number=5VIFT"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Update</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Aletha White</td>
                                            <td>BKTWQ</td>
                                            <td>Laboratory</td>
                                            <td>aletha@mail.com</td>

                                            <td>
                                                <a href="his_admin_manage_employee.php?delete=5"
                                                    class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i>
                                                    Delete</a>
                                                <a href="his_admin_view_single_employee.php?doc_id=5&&doc_number=BKTWQ"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_update_single_employee.php?doc_number=BKTWQ"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Update</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Bryan Arreola</td>
                                            <td>YDS7L</td>
                                            <td>Surgery | Theatre</td>
                                            <td>bryan@mail.com</td>

                                            <td>
                                                <a href="his_admin_manage_employee.php?delete=6"
                                                    class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i>
                                                    Delete</a>
                                                <a href="his_admin_view_single_employee.php?doc_id=6&&doc_number=YDS7L"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_update_single_employee.php?doc_number=YDS7L"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Update</a>
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
