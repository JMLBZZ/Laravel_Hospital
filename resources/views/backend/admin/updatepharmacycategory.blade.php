@extends('layouts.appadmin')

@section('title')
    Admin - Update Pharmacy Category - 
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
                                            <li class="breadcrumb-item active">Manage Pharmaceutical Category</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Antipyretics</h4>
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
                                            <div class="form-row" >
                                                <div class="form-group col-md-6" style="display:none">
                                                    <label for="inputEmail4" class="col-form-label">Pharmaceutical Category Name</label>
                                                    <input  type="text" value="Antipyretics" required="required" name="pharm_cat_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputPassword4" class="col-form-label">Pharmaceutical Category Vendor</label>
                                                    <input required="required" value="Cosmos Kenya Limited" type="text" name="pharm_cat_vendor" class="form-control"  id="inputPassword4">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Pharmaceutical Category Description</label>
                                                <textarea required="required" type="text" class="form-control" name="pharm_cat_desc" id="editor"><ul><li>An <strong>antipyretic</strong> (<a href="https://en.wikipedia.org/wiki/Help:IPA/English">/ËŒ&aelig;ntipaÉªËˆrÉ›tÉªk/</a>, from <em>anti-</em> &#39;against&#39; and <em><a href="https://en.wiktionary.org/wiki/pyretic">pyretic</a></em> &#39;feverish&#39;) is a substance that reduces <a href="https://en.wikipedia.org/wiki/Fever">fever</a>. Antipyretics cause the <a href="https://en.wikipedia.org/wiki/Hypothalamus">hypothalamus</a> to override a <a href="https://en.wikipedia.org/wiki/Prostaglandin">prostaglandin</a>-induced increase in <a href="https://en.wikipedia.org/wiki/Thermoregulation">temperature</a>. The body then works to lower the temperature, which results in a reduction in fever.</li><li>Most antipyretic medications have other purposes. The most common antipyretics in the United States are <a href="https://en.wikipedia.org/wiki/Ibuprofen">ibuprofen</a> and <a href="https://en.wikipedia.org/wiki/Aspirin">aspirin</a>, which are <a href="https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drugs">nonsteroidal anti-inflammatory drugs</a> (NSAIDs) used primarily as <a href="https://en.wikipedia.org/wiki/Analgesics">analgesics</a> (pain relievers), but which also have antipyretic properties; and <a href="https://en.wikipedia.org/wiki/Acetaminophen">acetaminophen</a> (paracetamol), an analgesic with weak anti-inflammatory properties.<a href="https://en.wikipedia.org/wiki/Antipyretic#cite_note-2">[2]</a></li></ul></textarea>
                                            </div>

                                           <button type="submit" name="update_pharmaceutical_category" class="ladda-button btn btn-danger" data-style="expand-right">Update Category</button>

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
