<x-default-layout>
    @section('title')
        <h1>Edit Brand ABC brand</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('box-setting.edit') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <!-- Input Name -->
                            <div class="mb-10">
                                <!-- Label -->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Brand Name:</label>
                                <br>
                                <br>
                                <!-- Input -->
                                <input type="text" class="form-control form-control-solid placeholder-dark" placeholder="ABC Brand" name="brand_name" id="brand_name_input" style="background-color: rgb(245, 245, 245);"/>
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
                                <input type="file" accept="image/*" class="form-control form-control-solid" id="file" name="file" style="background-color: rgb(245, 245, 245);">

                            </div>
                            <!--end::Input Email-->
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Status:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input btn-square" type="radio" name="status" id="activeStatus" value="active" checked>
                                    <label class="form-check-label text-dark" for="activeStatus">Active</label>
                                </div>
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input btn-square" type="radio" name="status" id="inactiveStatus" value="inactive">
                                    <label class="form-check-label text-dark" for="inactiveStatus">Inactive</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4"> 
                        <div class="col-md-10">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Description:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid" placeholder="This is Description" name="description" id="description_input" style="background-color: rgb(245, 245, 245);"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>

            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
                <a href="{{ route('box-setting.index') }}">
                <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Cancel</button>
                </a>
                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true" data-bs-toggle="modal" data-bs-target="#confirmationModalUpdate">Update</button>
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

    <!-- Begin: model -->
    @include('pages/apps/group-management/model/confirmUpdateModel')

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