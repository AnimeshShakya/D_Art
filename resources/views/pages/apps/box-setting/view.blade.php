<x-default-layout>
    @section('title')
        <h1>View Brand ABC</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('box-setting.view') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">

                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!-- Input Name -->
                            <div class="mb-10">
                                <!-- Label -->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Brand Name:</label>
                                <br>
                                <br>
                                <!-- Input -->
                                <span style="font-size: 14px;">ABC Brand</span>
                            </div>
                            <!--end::Input Name-->
                        </div>
                        
                        <div class="col-md-4">
                            <!-- Input Email -->
                            <div class="mb-10">
                                <!-- Label -->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Logo:</label>
                                <br>
                                <br>
                                <!-- Input -->
                                <img src="" class="img-thumbnail" alt="...">
                            </div>
                            <!--end::Input Email-->
                        </div>
                    </div>
                    
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Status:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Active</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-10"> 
                        <div class="col-md-10">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Description:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">This is a description</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>

            <!--begin::Actions-->
            <div class="d-flex justify-content-end p-10">
                <a href="{{ route('box-setting.index') }}">
                    <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Back</button>
                </a>
            </div>
            <!--end::Actions-->


                </div>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
</x-default-layout>


<script>
    function clearForm() {
        document.getElementById("full_name_input").value = ""; 
        document.getElementById("email_input").value = ""; 
        document.getElementById("address_input").value = ""; 
        document.getElementById("phone_input").value = ""; 
        document.getElementById("description_input").value = ""; 
        document.getElementById("user_role_select").selectedIndex = 0;
    }
</script>