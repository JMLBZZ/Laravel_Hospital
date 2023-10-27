@extends('layouts.appadmin')

@section('title')
    Admin - View Pharmaceutical Details -
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
                                    <li class="breadcrumb-item active">View Pharmaceuticals</li>
                                </ol>
                            </div>
                            <h4 class="page-title">#134057629 - Paracetamol</h4>
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
                                        <h2 class="mb-3">Pharmaceutical Name : Paracetamol</h2>
                                        <hr>
                                        <h4 class="text-danger">Pharmaceutical Vendor : Dawa Limited Kenya</h4>
                                        <hr>
                                        <h4 class="text-danger">Pharmaceutical Quantity : 500 Cartons</h4>
                                        <hr>
                                        <h4 class="text-danger">Pharmaceutical Description</h4>

                                        <p class="text-muted mb-4">
                                        <ul>
                                            <li><strong>Paracetamol</strong>, also known as <strong>acetaminophen</strong>
                                                and <strong>APAP</strong>, is a medication used to treat <a
                                                    href="https://en.wikipedia.org/wiki/Pain">pain</a> and <a
                                                    href="https://en.wikipedia.org/wiki/Fever">fever</a>. It is typically
                                                used for mild to moderate pain relief. There is mixed evidence for its use
                                                to relieve fever in children.&nbsp; It is often sold in combination with
                                                other medications, such as in many <a
                                                    href="https://en.wikipedia.org/wiki/Cold_medication">cold
                                                    medications</a> Paracetamol is also used for severe pain, such as <a
                                                    href="https://en.wikipedia.org/wiki/Cancer_pain">cancer pain</a> and
                                                pain after surgery, in combination with <a
                                                    href="https://en.wikipedia.org/wiki/Opioid_analgesic">opioid pain
                                                    medication</a>. It is typically used either by mouth or <a
                                                    href="https://en.wikipedia.org/wiki/Rectally">rectally</a>, but is also
                                                available by <a href="https://en.wikipedia.org/wiki/Intravenous">injection
                                                    into a vein</a>. Effects last between two and four hours.</li>
                                            <li>Paracetamol is generally safe at recommended doses.The recommended maximum
                                                daily dose for an adult is three to four grams. Higher doses may lead to
                                                toxicity, including <a
                                                    href="https://en.wikipedia.org/wiki/Liver_failure">liver failure</a>
                                                Serious skin rashes may rarely occur. It appears to be safe during <a
                                                    href="https://en.wikipedia.org/wiki/Pregnancy">pregnancy</a> and when <a
                                                    href="https://en.wikipedia.org/wiki/Breastfeeding">breastfeeding</a>.In
                                                those with liver disease, it may still be used, but in lower doses. It is
                                                classified as a mild <a
                                                    href="https://en.wikipedia.org/wiki/Analgesic">analgesic</a>. It does
                                                not have significant <a
                                                    href="https://en.wikipedia.org/wiki/Anti-inflammatory">anti-inflammatory</a>
                                                activity. How it works is not entirely clear.</li>
                                            <li>Paracetamol was first made in 1877. It is the most commonly used medication
                                                for pain and fever in both the United States and Europe. It is on the <a
                                                    href="https://en.wikipedia.org/wiki/World_Health_Organization%27s_List_of_Essential_Medicines">World
                                                    Health Organization&#39;s List of Essential Medicines</a>, the safest
                                                and most effective medicines needed in a <a
                                                    href="https://en.wikipedia.org/wiki/Health_system">health system</a>.<a
                                                    href="https://en.wikipedia.org/wiki/Paracetamol#cite_note-WHO21st-24">[24]</a>
                                                Paracetamol is available as a <a
                                                    href="https://en.wikipedia.org/wiki/Generic_medication">generic
                                                    medication</a> with trade names including <a
                                                    href="https://en.wikipedia.org/wiki/Tylenol_(brand)">Tylenol</a> and <a
                                                    href="https://en.wikipedia.org/wiki/Panadol_(brand)">Panadol</a>, among
                                                others.The wholesale price in the <a
                                                    href="https://en.wikipedia.org/wiki/Developing_world">developing
                                                    world</a> is less than US$0.01 per dose. In the United States, it costs
                                                about US$0.04 per dose. In 2019, it was the 17th most prescribed medication
                                                in the United States, with more than 29&nbsp;million prescriptions.</li>
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
