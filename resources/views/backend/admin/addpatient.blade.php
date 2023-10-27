@extends('layouts.appadmin')

@section('title')
    Admin - Add Patient -
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    {{-- message d'erreur --}}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- message de succès --}}
    @if (session('success'))
        <div class="alert alert-success">
            {!! session('success') !!} {{-- Les exclamations sont pour que les balises html soient bien interprétées --}}
        </div>
    @endif



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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Surgery | Theatre</a></li>
                                    <li class="breadcrumb-item active">Add Patient</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Patient</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form row -->
                <!--LETS GET DETAILS OF SINGLE PATIENT GIVEN THEIR ID-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Fill all fields</h4>
                                <!--Add Patient Form-->
                                <form id="formpatient" action="{{ url('/savepatient') }}" method="POST"
                                    class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" required="required" name="patient_name"
                                                class="form-control" id="inputEmail4" placeholder="Patient's Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Patient Address</label>
                                            <input type="text" required="required" name="patient_address"
                                                class="form-control" id="inputEmail4" placeholder="Patient's Address">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                            <input type="text" required="required" name="patient_number"
                                                class="form-control" id="inputEmail4" placeholder="Patient's Number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Category</label>
                                            <select id="inputState" required="required" name="patient_category"
                                                class="form-control">
                                                <option>Alive</option>
                                                <option>Inpatient</option>
                                                <option>Outpatient</option>
                                                <option>Dead</option>

                                            </select>
                                        </div>
                                        {{-- <div class="form-group col-md-6" style="display:none">
                                            <label for="inputPassword4" class="col-form-label">Surgery Status</label>
                                            <input required="required" type="text" value="Undergoing" name="s_pat_status"
                                                class="form-control" id="inputPassword4" placeholder="Patient`s Age">
                                        </div> --}}
                                    </div>

                                    {{-- 
                                    <div class="form-row">

                                        <div class="form-group col-md-2" style="display:none">
                                            <label for="inputZip" class="col-form-label">Surgery Record Number</label>
                                            <input type="text" name="s_number" value="63HWZ" class="form-control"
                                                id="inputZip">
                                        </div>
                                    </div> --}}

                                    <button type="submit" name="add_patient" class="ladda-button btn btn-success"
                                        data-style="expand-right">Add Patient</button>
                                    <a href="/managepatient" class="badge badge-danger ">Retour</a>

                                </form>
                                <!--End Patient Form-->
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
