@extends('layouts.appadmin')

@section('title')
    Admin - Manage Pharmacy Category -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                    <li class="breadcrumb-item active">Manage Pharmaceutical Category</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Manage Pharmaceutical Categories</h4>
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
                                            <th data-toggle="true">Category Name</th>
                                            <th data-hide="phone">Category Vendor</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Antibiotics</td>
                                            <td>Cosmos Kenya Limited</td>
                                            <td>
                                                <a href="his_admin_view_single_pharm_category.php?pharm_cat_id=3"
                                                    class="badge badge-success"><i class="far fa-eye "></i> View</a>
                                                <a href="his_admin_update_single_pharm_category.php?pharm_cat_name=Antibiotics"
                                                    class="badge badge-warning"><i class="fas fa-clipboard-check "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_pharm_cat.php?delete_pharm_cat=3"
                                                    class="badge badge-danger"><i class="fas fa-trash-alt "></i> Delete</a>


                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Analgesics</td>
                                            <td>Dawa Limited Kenya</td>
                                            <td>
                                                <a href="his_admin_view_single_pharm_category.php?pharm_cat_id=2"
                                                    class="badge badge-success"><i class="far fa-eye "></i> View</a>
                                                <a href="his_admin_update_single_pharm_category.php?pharm_cat_name=Analgesics"
                                                    class="badge badge-warning"><i class="fas fa-clipboard-check "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_pharm_cat.php?delete_pharm_cat=2"
                                                    class="badge badge-danger"><i class="fas fa-trash-alt "></i> Delete</a>


                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Antipyretics</td>
                                            <td>Cosmos Kenya Limited</td>
                                            <td>
                                                <a href="his_admin_view_single_pharm_category.php?pharm_cat_id=1"
                                                    class="badge badge-success"><i class="far fa-eye "></i> View</a>
                                                <a href="his_admin_update_single_pharm_category.php?pharm_cat_name=Antipyretics"
                                                    class="badge badge-warning"><i class="fas fa-clipboard-check "></i>
                                                    Update</a>
                                                <a href="his_admin_manage_pharm_cat.php?delete_pharm_cat=1"
                                                    class="badge badge-danger"><i class="fas fa-trash-alt "></i> Delete</a>


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
