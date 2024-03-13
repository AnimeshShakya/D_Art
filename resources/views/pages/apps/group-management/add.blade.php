<x-default-layout>
    @section('title')
        <h1>Add Group</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('group-management.add') }}</h2>
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
                            <!--begin::Input Name-->
                            <div class="row mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Group Name:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Group Name" name="groupName" style="background-color: rgb(245, 245, 245);"/>
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Group Admin:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Group Admin" name="groupAdmin" style="background-color: rgb(245, 245, 245);"/>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input Name-->
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
                    <div class="row mb-10">
                        <div class="row mb-4">
                            <div class="col-md-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Status:</label>
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
                        </div>
                    </div>
                    <!-- end::row -->
                    <!--begin::Actions-->
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('group-management.index') }}">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-sm btn-primary">Add</button>
                            </div>  
                        </div>
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

    <!-- begin::model -->
    @include('pages/apps/group-management/model/confirmUpdateModel')
    <!-- end::model -->
</x-default-layout>
