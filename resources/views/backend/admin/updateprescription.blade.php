@extends('layouts.appadmin')

@section('title')
    Admin - Update Prescription -
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                    <li class="breadcrumb-item active">Manage Prescriptions</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update Patient Prescription</h4>
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
                                            <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                            <input type="text" required="required" readonly name="pres_pat_name"
                                                value="Lorem Ipsum" class="form-control" id="inputEmail4"
                                                placeholder="Patient's First Name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                            <input required="required" type="text" readonly name="pres_pat_age"
                                                value="10" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Last Name">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                            <input required="required" type="text" readonly name="pres_pat_addr"
                                                value="12 9001 Machakos" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Age">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Patient Type</label>
                                            <input required="required" readonly type="text" name="pres_pat_type"
                                                value="OutPatient" class="form-control" id="inputPassword4"
                                                placeholder="Patient`s Age">
                                        </div>

                                    </div>

                                    <div class="form-group ">
                                        <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                        <input required="required" type="text" value="Flu" name="pres_pat_ailment"
                                            class="form-control" id="inputCity">
                                    </div>
                                    <hr>


                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Prescription</label>
                                        <textarea required="required" type="text" class="form-control" name="pres_ins" id="editor"><ul><li><a href="https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+decongestant&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlbiBLGMktNzcnYxMRosYhVIyylVSElNzs9LTy0uScwrAQBMMnd5LgAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQHw">Decongestant</a></li><li>Relieves nasal congestion, swelling and runny nose.</li><li><a href="https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+cough+medicine&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlbiBLEM89IsLHYxMRosYhVKyylVSM4vTc9QyE1NyUzOzEsFAA_gu9IwAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQIA">Cough medicine</a></li><li>Blocks the cough reflex. Some may thin and loosen mucus, making it easier to clear from the airways.</li><li><a href="https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+nonsteroidal+anti-inflammatory+drug&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlYCs0yzCit3MTEaLGJVT8spVcjLzysuSS3Kz0xJzFFIzCvJ1M3MS8tJzM1NLMkvqlRIKSpNBwByUiYhRAAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQIQ">Nonsteroidal anti-inflammatory drug</a></li><li>Relieves pain, decreases inflammation and reduces fever.</li><li><a href="https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+analgesic&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlZiB7EqDSx3MTEaLGLlTcspVUjMS8xJTy3OTAYAbecS9ikAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQIg">Analgesic</a></li><li>Relieves pain.</li><li><a href="https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+antiviral+drug&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlYCs1KMC0x2MTEaLGIVSsspVUjMK8ksyyxKzFFIKSpNBwDBFxlOLwAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQIw">Antiviral drug</a></li><li>Reduces viruses&#39; ability to replicate.</li></ul></textarea>
                                    </div>

                                    <button type="submit" name="update_patient_presc" class="ladda-button btn btn-primary"
                                        data-style="expand-right">Update Patient Prescription</button>

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
