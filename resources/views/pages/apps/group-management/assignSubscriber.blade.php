<x-default-layout>
    @section('title')
        <h1>Assign Subscribers</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('subscriber-management.assign') }}</h2>
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
                        <div class="col-md-12">
                            <!--begin::Input Name-->
                            <div class="row mb-10">
                            <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Subscriber Search:</label>
                            <br>
                            <br>
                            <div class="d-flex align-items-center position-relative my-1">
                            
                                {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                                <input type="text" class="form-control form-control-solid w-250px ps-13" id="mySearchInput" style="background-color: rgb(245, 245, 245);"/>
                            </div>
                            </div>
                            <!--end::Input Name-->
                        </div>
                    </div>
                    <!-- end::row -->
                    <!--begin::Actions-->
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('group-management.subscriber') }}">
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

    <!-- begin::Model -->
    @include('pages/apps/group-management/model/confirmUpdateModel')
    <!-- end::Model -->
</x-default-layout>
