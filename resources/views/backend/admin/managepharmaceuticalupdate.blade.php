@extends('layouts.appadmin')

@section('title')
    Admin - Manage Pharmaceutical Update -
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
                                    <li class="breadcrumb-item active">Manage Pharmaceutical</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update #452760813 - Aspirin</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Fill all fields</h4>
                                <!--Add Patient Form-->
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Pharmaceutical Name</label>
                                            <input type="text" required="required" value="Aspirin" name="phar_name"
                                                class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Pharmaceutical
                                                Quantity(Cartons)</label>
                                            <input required="required" type="text" value="500" name="phar_qty"
                                                class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Pharmaceutical Description</label>
                                        <textarea required="required" type="text" class="form-control" name="phar_desc" id="editor"><ul><li><strong>Aspirin</strong>, also known as <strong>acetylsalicylic acid</strong> (<strong>ASA</strong>), is a <a href="https://en.wikipedia.org/wiki/Medication">medication</a> used to reduce <a href="https://en.wikipedia.org/wiki/Pain">pain</a>, <a href="https://en.wikipedia.org/wiki/Fever">fever</a>, or <a href="https://en.wikipedia.org/wiki/Inflammation">inflammation</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Specific inflammatory conditions which aspirin is used to treat include <a href="https://en.wikipedia.org/wiki/Kawasaki_disease">Kawasaki disease</a>, <a href="https://en.wikipedia.org/wiki/Pericarditis">pericarditis</a>, and <a href="https://en.wikipedia.org/wiki/Rheumatic_fever">rheumatic fever</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Aspirin given shortly after a <a href="https://en.wikipedia.org/wiki/Myocardial_infarction">heart attack</a> decreases the risk of death.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Aspirin is also used long-term to help prevent further heart attacks, <a href="https://en.wikipedia.org/wiki/Ischaemic_stroke">ischaemic strokes</a>, and <a href="https://en.wikipedia.org/wiki/Thrombus">blood clots</a> in people at high risk.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> It may also decrease the risk of certain types of <a href="https://en.wikipedia.org/wiki/Cancer">cancer</a>, particularly <a href="https://en.wikipedia.org/wiki/Colorectal_cancer">colorectal cancer</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-6">[6]</a> For pain or fever, effects typically begin within 30 minutes.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Aspirin is a <a href="https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drug">nonsteroidal anti-inflammatory drug</a> (NSAID) and works similarly to other NSAIDs but also suppresses the normal functioning of <a href="https://en.wikipedia.org/wiki/Platelet">platelets</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a></li><li>One common <a href="https://en.wikipedia.org/wiki/Adverse_effect">adverse effect</a> is an <a href="https://en.wikipedia.org/wiki/Upset_stomach">upset stomach</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> More significant side effects include <a href="https://en.wikipedia.org/wiki/Stomach_ulcer">stomach ulcers</a>, <a href="https://en.wikipedia.org/wiki/Stomach_bleeding">stomach bleeding</a>, and worsening <a href="https://en.wikipedia.org/wiki/Asthma">asthma</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Bleeding risk is greater among those who are older, drink <a href="https://en.wikipedia.org/wiki/Alcohol_(drug)">alcohol</a>, take other NSAIDs, or are on other <a href="https://en.wikipedia.org/wiki/Anticoagulants">blood thinners</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> Aspirin is not recommended in the last part of <a href="https://en.wikipedia.org/wiki/Pregnancy">pregnancy</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> It is not generally recommended in children with <a href="https://en.wikipedia.org/wiki/Infection">infections</a> because of the risk of <a href="https://en.wikipedia.org/wiki/Reye_syndrome">Reye syndrome</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a> High doses may result in <a href="https://en.wikipedia.org/wiki/Tinnitus">ringing in the ears</a>.<a href="https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5">[5]</a></li></ul></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Pharmaceutical Vendor</label>
                                            <input required="required" type="text" value="Cosmos Kenya Limited"
                                                name="phar_vendor" class="form-control" id="inputPassword4">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">Pharmaceutical Category</label>
                                            <select id="inputState" required="required" name="phar_cat"
                                                class="form-control">
                                                <!--Fetch All Pharmaceutical Categories-->
                                                <option>Antibiotics</option>
                                                <option>Analgesics</option>
                                                <option>Antipyretics</option>

                                            </select>
                                        </div>

                                    </div>
                                    <button type="submit" name="update_pharmaceutical"
                                        class="ladda-button btn btn-warning" data-style="expand-right">Update
                                        Pharmaceutical</button>

                                </form>

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
