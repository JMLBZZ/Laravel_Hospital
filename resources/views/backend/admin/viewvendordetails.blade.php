@extends('layouts.appadmin')

@section('title')
    Admin - View Vendor Details -
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
                                    <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Vendors</a></li>
                                    <li class="breadcrumb-item active">Manage Vendors</li>
                                </ol>
                            </div>
                            <h4 class="page-title">#6ISKC</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-5">

                                    <div class="tab-content pt-0">

                                        <div class="tab-pane active show" id="product-1-item">
                                            <img src="assets/images/vendor.png" alt=""
                                                class="img-fluid mx-auto d-block rounded">
                                        </div>

                                    </div>
                                </div> <!-- end col -->
                                <div class="col-xl-7">
                                    <div class="pl-xl-3 mt-3 mt-xl-0">
                                        <h2 class="mb-3">Vendor Name : Cosmos Pharmaceutical Limited</h2>
                                        <hr>
                                        <h3 class="text-danger">Vendor Contacts : +254(20)550700-9</h3>
                                        <hr>
                                        <h3 class="text-danger ">Vendor Email : info@cosmospharmaceuticallimited.com</h3>
                                        <hr>
                                        <h3 class="text-danger ">Vendor Address : P.O. Box 41433, GPO 00100 Nairobi, Kenya
                                        </h3>
                                        <hr>

                                        <h2 class="align-centre">Vendor Details</h2>
                                        <hr>
                                        <p class="text-muted mb-4">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                            eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                            eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                            fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
                                            enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                            viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam
                                            ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                            libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,
                                            luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt
                                            tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam
                                            sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
                                            amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum
                                            sodales, augue velit cursus nunc,</p>
                                        </p>
                                        <hr>

                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->


                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
