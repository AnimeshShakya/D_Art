<x-default-layout>
    @section('title')
        <h1>View User $user1</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('user-management.view') }}</h2>
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
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Full Name:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Bob</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Email:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">example@example.com</span>
                                <!--end::Input-->
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
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Phone:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">9876543211</span>

                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">User Role:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Group Admin</span>

                                <!--end::Input-->
                            </div>
                            <!--end::Input Email-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!-- begin::row -->
                    <div class="row mb-10">
                        <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Address Information:</label>
                        <div class="col-md-4">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <br>
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">City: </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Lalitpur</span>

                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <br>
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Province: </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">3</span>

                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>
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
                                <span style="font-size: 14px;">A bank is a financial institution that provides various financial services, including accepting deposits, lending money, and facilitating transactions, while also offering investment products and wealth management services to individuals and businesses. It acts as an intermediary between those who have surplus funds and those who need capital, playing a crucial role in the economy's financial system.</span>

                                <!--end::Input-->
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end p-10">
                        <a href="{{ route('user-management.index') }}">
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
