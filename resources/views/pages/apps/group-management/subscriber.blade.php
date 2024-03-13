<x-default-layout>
    @section('title')
        
        <div class="d-flex justify-content-between align-items-between">
            <h1>Someone's Group Subscribers</h1>
            <div class="d-flex">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="collapse" data-bs-target="#filterCollapse" title="Filter">
                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                    <!-- Filter -->
                </button>
                <!--end::Filter-->
                <!--begin::Assign Gallery-->
                <a href="{{ route('group-management.assignSubscriber') }}">
                    <button type="button" class="btn btn-primary">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!} Assign
                    </button>
                </a>
                <!--end::Assign Gallery-->
            </div>
        </div>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('group-management.subscriber') }}</h2>
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!-- Filter Collapse Content -->
                <div class="collapse" id="filterCollapse" aria-labelledby="filterCollapseLabel" aria-hidden="true">
                    <div class="card card-body">
                        <!-- card header -->
                        <div class="card-header p-0 border-0"> <!-- Added border-0 class here -->
                            <h5 class="card-title" id="filterCollapseLabel">Filter Options</h5>
                        </div>
                        <div class="card-body p-0">
                            <!-- Search, Date range filter, and buttons in one row -->
                            <div class="row align-items-center">
                                <div class="col-md-2 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Subscriber Name:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="name" class="form-control form-control-solid w-250px" id="nameSearchInput" title="Group Name" style="background-color: rgb(245, 245, 245);"/>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" style="margin-left: 100px;">Email:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1" style="margin-left: 100px;">
                                        <input type="text" name="email" class="form-control form-control-solid w-250px" id="email" title="email" style="background-color: rgb(245, 245, 245);"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end"> <!-- Updated here -->
                            <button type="button" class="btn btn-secondary me-3 flex" onclick="resetForm()">Reset</button>
                            <button type="button" class="btn btn-primary flex">Apply Filters</button>
                        </div>
                    </div>
                </div>
                <!-- End Filter Collapse Content -->
                <!--begin::Card body-->
                <div class="card-body d-flex">
                    <!--begin::Form-->
                    <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th>S.no.</th>
                                <th>Subscriber name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Subscriber A</td>
                                <td>example@example.com</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        Remove
                                    </a>
                                </td>
                            <tr>
                                <td>2</td>
                                <td>Subscriber B</td>
                                <td>sample@.com</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Subscriber C</td>
                                <td>note@note.com</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->

    <!-- begin::Model -->
    @include('pages/apps/group-management/model/confirmDeleteModel')
    <!-- end::Model -->
</x-default-layout>




<script>
    function resetForm() {
        document.getElementById("nameSearchInput").value = ""; 
        document.getElementById("email").value = "";
    };
</script>