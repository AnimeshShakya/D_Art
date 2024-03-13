<x-default-layout>
    @section('title')
        <h1>View Group ABC</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('group-management.view') }}</h2>
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
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Group Name:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">ABC Group</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Group Admin:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">User A</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Status:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Inactive</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Number of Subscribers:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">100</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end p-10">
                        <a href="{{ route('group-management.index') }}">
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
