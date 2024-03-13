<x-default-layout>
    @section('title')
        <h1>Add media</h1>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('media-management.add') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Form-->
                <div class="px-7 py-5 pt-15">
                    <!--begin::Row 1-->
                    <div class="row mb-10">
                        <!-- Media Name Column -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="media_name" class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Media Name</label>
                                <br>
                                <br>
                                <input type="text" class="form-control form-control-solid" id="media_name" name="media_name" style="background-color: rgb(245, 245, 245);">
                            </div>
                        </div>
                        <!-- Media Type Column -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Media Type</label>
                                <br>
                                <br>
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input" type="radio" name="media_type" id="picture" value="picture" checked>
                                    <label class="form-check-label text-dark" for="picture">Picture</label>
                                </div>
                                <div class="form-check form-check-inline" style="margin-top: 10px;">
                                    <input class="form-check-input" type="radio" name="media_type" id="video" value="video">
                                    <label class="form-check-label text-dark" for="video">Video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Row 1-->
                    <!--begin::Row 2-->
                    <div class="row mb-10">
                        <!-- File Column -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="file" class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">File</label>
                                <br>
                                <br>
                                <input type="file" accept = "image/*,video/*" class="form-control form-control-solid" id="file" name="file" style="background-color: rgb(245, 245, 245);">
                            </div>
                        </div>

                        <!-- Order by Column -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="order_by" class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 required">Order by</label>
                                <br>
                                <br>
                                <input type="number" class="form-control form-control-solid" id="order_by" name="order_by" style="background-color: rgb(245, 245, 245);">
                            </div>
                        </div>
                        
                        <!-- Description Column -->
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="description" class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Description</label>
                                <br>
                                <br>
                                <textarea class="form-control form-control-solid" id="description" name="description" style="background-color: rgb(245, 245, 245);"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end::Row 2-->
                    <!--begin::Actions-->
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                            <a href="{{ route('media-management.index') }}">
                                <button type="reset" class="btn btn-sm btn-light btn-active-dark me-2">Cancel</button>
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
