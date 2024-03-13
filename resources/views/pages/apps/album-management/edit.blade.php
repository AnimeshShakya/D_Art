<x-default-layout>
    @section('title')
        <h1>Edit Album</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('album-management.edit') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">
                    <!-- begin::Contents -->
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Album Name:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Group Name" name="full_name" style="background-color: rgb(245, 245, 245);"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Group Name:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Group Admin" name="email" style="background-color: rgb(245, 245, 245);"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                        
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
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
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>

                    <div class="row mb-10">


                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                        <a href="{{ route('album-management.index') }}">
                        <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Cancel</button>
                        </a>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true" data-bs-toggle="modal" data-bs-target="#confirmationModalUpdate">Update</button>
                        </div>  
                        <!--end::Actions-->
                    </div>
                    <!-- end::Contents -->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->

    @include('pages/apps/group-management/model/confirmUpdateModel')
</x-default-layout>
