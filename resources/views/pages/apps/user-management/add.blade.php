<x-default-layout>
    @section('title')
        <h1>Add User</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('user-management.add') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">
                    <!-- begin::row -->
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!-- Input Name -->
                            <div class="mb-10">
                                <!-- Label -->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Full Name:</label>
                                <br>
                                <br>
                                <!-- Input -->
                                <input type="text" class="form-control form-control-solid placeholder-dark" name="full_name" id="full_name_input" style="background-color: rgb(245, 245, 245);"/>
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <div class="col-md-4">
                            <!-- Input Email -->
                            <div class="mb-10">
                                <!-- Label -->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Email:</label>
                                <br>
                                <br>
                                <!-- Input -->
                                <input type="text" class="form-control form-control-solid placeholder-dark" name="email" id="email_input" style="background-color: rgb(245, 245, 245);"/>
                            </div>
                            <!--end::Input Email-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Phone:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid placeholder-dark" name="phone" id="phone_input" style="background-color: rgb(245, 245, 245);"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">User Role:</label>
                                <br>
                                <br>
                                <select class="form-select form-select-solid" name="user_role" id="user_role_select" style="background-color: rgb(245, 245, 245);">
                                    <option value="super_admin">Super Admin</option>
                                    <option value="group_admin">Group Admin</option>
                                    <option value="subscriber">Subscriber</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
                    <div class="row mb-10"> 
                        <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Address Information:</label>
                        <div class="col-md-4">
                            <!-- Input Address -->
                            <div class="mb-10">
                                <!-- Label -->
                                <br>
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">City:</label>
                                <br>
                                <!-- Input -->
                                <input type="text" class="form-control form-control-solid placeholder-dark" name="city" id="city" style="background-color: rgb(245, 245, 245);"/>
                            </div>
                            <!--end::Input Address-->
                        </div>
                        <div class="col-md-4">
                            <!-- Input Address -->
                            <div class="mb-10">
                                <!-- Label -->
                                <br>
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Province:</label>
                                <br>
                                <!-- Input -->
                                <input type="text" class="form-control form-control-solid placeholder-dark" name="province" id="province" style="background-color: rgb(245, 245, 245);"/>
                            </div>
                            <!--end::Input Address-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
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
                                <textarea type="text" class="form-control form-control-solid" placeholder="" name="description" id="description_input" style="background-color: rgb(245, 245, 245);"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end p-10">
                        <a href="{{ route('user-management.index') }}" class="me-2">
                            <button type="button" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Back</button>
                        </a>
                        <!-- <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" onclick="clearForm()">Clear</button> -->
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
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