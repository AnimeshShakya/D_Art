<x-default-layout>
    @section('title')
        <h1>Add News</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('news-management.add') }}</h2>
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
                    <div class="row mb-4">
                        <!--begin::Column-->
                        <div class="col-md-6">
                            <!--begin::Input News-->
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">News Heading:</label>
                                <br>
                                <br>
                                <input type="text" class="form-control form-control-solid" name="albumName" id="group_name" style="background-color: rgb(245, 245, 245);">
                            </div>
                            <!--end::Input News-->
                        </div>
                        <!--end::Column-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row mb-6">
                        <!--begin::Column-->
                        <div class="col-md-4">
                            <!--begin::Input Status-->
                            <div class="mb-10">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Status:</label>
                                <br>
                                <br>
                                <!--end::Label-->
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input btn-square" type="radio" name="status" id="activeStatus" value="active" checked>
                                    <label class="form-check-label text-dark" for="activeStatus">Active</label>
                                </div>
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input btn-square" type="radio" name="status" id="inactiveStatus" value="inactive">
                                    <label class="form-check-label text-dark" for="inactiveStatus">Inactive</label>
                                </div>
                            </div>
                            <!--end::Input Status-->
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
                                <textarea class="form-control form-control-solid" name="groupName" id="group_admin" style="background-color: rgb(245, 245, 245);"></textarea>
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
                                    <button type="button" class="btn btn-sm btn-light btn-active-dark me-2">Back</button>
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
</x-default-layout>
