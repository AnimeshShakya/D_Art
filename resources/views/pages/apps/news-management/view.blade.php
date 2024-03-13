<x-default-layout>
    @section('title')
        <h1>View News NRB</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('news-management.view') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">
                    <!--begin::Row-->
                    <div class="row mb-10">
                        <!--begin::Column-->
                        <div class="col-md-6">
                            <!--begin::Input Name-->
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">News Heading:</label>
                                <br>
                                <br>
                                <span style="font-size: 14px;">The central bank of Nepal, the Nepal Rastra Bank (NRB), has published details of its policy strategy for the current fiscal year.</span>
                            </div>
                            <!--end::Input Name-->
                        </div>
                        <!--end::Column-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row mb-10">
                        <!--begin::Column-->
                        <div class="col-md-4">
                            <!--begin::Input Address-->
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Status:</label>
                                <br>
                                <br>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <span style="font-size: 14px;">Active</span>
                            </div>
                            <!--end::Input Address-->
                        </div>
                        <!--end::Column-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row mb-10">
                        <!--begin::Column-->
                        <div class="col-md-10">
                            <!--begin::Input Email-->
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Description:</label>
                                <br>
                                <br>
                                <span style="font-size: 14px;">This is description of the news</span>
                            </div>
                            <!--end::Input Email-->
                        </div>
                        <!--end::Column-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Actions-->
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                            <a href="{{ route('news-management.index') }}">
                                <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2" data-kt-menu-dismiss="true">Back</button>
                            </a>
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
</x-default-layout>
