@extends('layouts.appadmin')

@section('title')
    Admin - Manage Patient -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Surgery | Theatre</a></li>
                                    <li class="breadcrumb-item active">Add Patient</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Patient</h4>
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
                                        <div class="form-group d-flex justify-content-between">
                                            {{-- <div>
                                                <input id="demo-foo-search" type="text" placeholder="Search"
                                                    class="form-control form-control-sm" autocomplete="on">
                                            </div> --}}
                                            <div>
                                                <a href="/addpatient"
                                                    class="badge badge-success"><i class="mdi mdi-account-plus ">Add
                                                        Patient</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                    data-page-size="7">
                                    <thead>
                                        <tr>
                                            {{-- <th>#</th> --}}
                                            <th data-hide="phone">Patient Number</th>
                                            <th data-toggle="true">Patient Name</th>
                                            <th data-hide="phone">Patient Address</th>
                                            <th data-hide="phone">Patient Category</th>
                                            <th data-hide="phone">Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($patients as $patient)
                                        <tbody>
                                            <tr>
                                                <td>{{ $patient->patient_number }}</td>
                                                <td>{{ $patient->patient_name }}</td>
                                                <td>{{ $patient->patient_address }}</td>
                                                <td>{{ $patient->patient_category }}</td>
                                                <td>
                                                    <a href="/patientdetails/{{ $patient->id }}"
                                                        class="badge badge-success"><i class="mdi mdi-eye"></i>View</a>
                                                    <a href="{{ URL::to('/updatepatient/' . $patient->id) }}"
                                                        class="badge badge-primary"><i class="mdi mdi-plus-circle ">Edit</i>
                                                    </a>
                                                    <a href="/deletepatient/{{ $patient->id }}"
                                                        class="badge badge-danger"><i
                                                            class="mdi mdi-delete-forever ">Delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                    {{ $patients->links('client.pagination') }}

                                    {{-- 
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Lawrence Bischof</td>
                                            <td>ISL1E</td>
                                            <td>82 Bryan Street</td>
                                            <td>InPatient</td>

                                            <td>
                                                <a href="his_admin_view_single_patient.php?pat_number=ISL1E"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_theatre_single_patient.php?pat_id=9"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Add Patient</a>
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
                                                <a href="his_admin_view_single_patient.php?pat_number=3Z14K"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_theatre_single_patient.php?pat_id=10"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Add Patient</a>
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
                                                <a href="his_admin_view_single_patient.php?pat_number=K74P3"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_theatre_single_patient.php?pat_id=11"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Add Patient</a>
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
                                                <a href="his_admin_view_single_patient.php?pat_number=4TLG0"
                                                    class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                <a href="his_admin_theatre_single_patient.php?pat_id=12"
                                                    class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i>
                                                    Add Patient</a>
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
                                --}}
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
