@extends('layouts.appadmin')

@section('title')
    Admin - View Pharmacy Category Details -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                    <li class="breadcrumb-item active">View Pharmaceuticals Categories</li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
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
                                            <img src="assets/images/pharm.webp" alt=""
                                                class="img-fluid mx-auto d-block rounded">
                                        </div>

                                    </div>
                                </div> <!-- end col -->
                                <div class="col-xl-7">
                                    <div class="pl-xl-3 mt-3 mt-xl-0">
                                        <h2 class="mb-3">Pharmaceutical Name: Analgesics</h2>
                                        <hr>
                                        <h6 class="text-danger">Phrmaceutical VendorDawa Limited Kenya</h6>
                                        <hr>
                                        <p class="text-muted mb-4">
                                        <ul>
                                            <li>
                                                <p>An <strong>analgesic</strong> or <strong>painkiller</strong> is any
                                                    member of the group of <a
                                                        href="https://en.wikipedia.org/wiki/Pharmaceutical_drug">drugs</a>
                                                    used to achieve analgesia, relief from <a
                                                        href="https://en.wikipedia.org/wiki/Pain">pain</a>.</p>
                                                <p>Analgesic drugs act in various ways on the <a
                                                        href="https://en.wikipedia.org/wiki/Peripheral_nervous_system">peripheral</a>
                                                    and <a
                                                        href="https://en.wikipedia.org/wiki/Central_nervous_system">central</a>
                                                    nervous systems. They are distinct from <a
                                                        href="https://en.wikipedia.org/wiki/Anesthetic">anesthetics</a>,
                                                    which temporarily affect, and in some instances completely eliminate, <a
                                                        href="https://en.wikipedia.org/wiki/Sense">sensation</a>. Analgesics
                                                    include <a
                                                        href="https://en.wikipedia.org/wiki/Paracetamol">paracetamol</a>
                                                    (known in North America as <a
                                                        href="https://en.wikipedia.org/wiki/Acetaminophen">acetaminophen</a>
                                                    or simply APAP), the <a
                                                        href="https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drug">nonsteroidal
                                                        anti-inflammatory drugs</a> (NSAIDs) such as the <a
                                                        href="https://en.wikipedia.org/wiki/Salicylate">salicylates</a>, and
                                                    <a href="https://en.wikipedia.org/wiki/Opioid">opioid</a> drugs such as
                                                    <a href="https://en.wikipedia.org/wiki/Morphine">morphine</a> and <a
                                                        href="https://en.wikipedia.org/wiki/Oxycodone">oxycodone</a>.</p>
                                            </li>
                                        </ul>
                                        </p>
                                        <!--
                                                        <form class="form-inline mb-4">
                                                            <label class="my-1 mr-2" for="quantityinput">Quantity</label>
                                                            <select class="custom-select my-1 mr-sm-3" id="quantityinput">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                            </select>

                                                            <label class="my-1 mr-2" for="sizeinput">Size</label>
                                                            <select class="custom-select my-1 mr-sm-3" id="sizeinput">
                                                                <option selected>Small</option>
                                                                <option value="1">Medium</option>
                                                                <option value="2">Large</option>
                                                                <option value="3">X-large</option>
                                                            </select>
                                                        </form>

                                                        <div>
                                                            <button type="button" class="btn btn-danger mr-2"><i class="mdi mdi-heart-outline"></i></button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light">
                                                                <span class="btn-label"><i class="mdi mdi-cart"></i></span>Add to cart
                                                            </button>
                                                        </div> -->
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <!--
                                            <div class="table-responsive mt-4">
                                                <table class="table table-bordered table-centered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Outlets</th>
                                                            <th>Price</th>
                                                            <th>Stock</th>
                                                            <th>Revenue</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASOS Ridley Outlet - NYC</td>
                                                            <td>$139.58</td>
                                                            <td>
                                                                <div class="progress-w-percent mb-0">
                                                                    <span class="progress-value">478 </span>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$1,89,547</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Outlet - SRT</td>
                                                            <td>$149.99</td>
                                                            <td>
                                                                <div class="progress-w-percent mb-0">
                                                                    <span class="progress-value">73 </span>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$87,245</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chairtest Outlet - HY</td>
                                                            <td>$135.87</td>
                                                            <td>
                                                                <div class="progress-w-percent mb-0">
                                                                    <span class="progress-value">781 </span>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$5,87,478</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nworld Group - India</td>
                                                            <td>$159.89</td>
                                                            <td>
                                                                <div class="progress-w-percent mb-0">
                                                                    <span class="progress-value">815 </span>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$55,781</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> -->

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
