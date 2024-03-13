<x-default-layout>

    @section('title')
        
        <div class="d-flex justify-content-between align-items-between">
            <h1>@$user['name']'s Group Management</h1>
            <div class="d-flex">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="collapse" data-bs-target="#filterCollapse" title="Filter">
                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                    <!-- Filter -->
                </button>
                <!--end::Filter-->
                <!--begin::Assign Gallery-->
                <a href="{{ route('group-management.add') }}">
                    <button type="button" class="btn btn-primary">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!} Add Group
                    </button>
                </a>
                <!--end::Assign Gallery-->
            </div>
        </div>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('group-management.index') }}</h2>
    @endsection

    <!-- This is user profile view page -->

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
                        <div class="card-header p-0 border-0"> 
                            <h5 class="card-title" id="filterCollapseLabel">Filter Options</h5>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body p-0">
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Group Name:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="name" class="form-control form-control-solid w-250px" id="groupName" title="Group Name" style="background-color: rgb(245, 245, 245);"/>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Group Admin:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="email" class="form-control form-control-solid w-250px" id="groupAdmin" title="Group Admin" style="background-color: rgb(245, 245, 245);"/>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Select Status:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <select class="form-select form-select-solid w-250px" name="status" id="statusSelect" data-kt-user-table-filter="status" title="Filter by status" style="background-color: rgb(245, 245, 245);">
                                            <option value="all">All</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end"> <!-- Updated here -->
                            <button type="button" class="btn btn-secondary me-3 flex"  onclick="resetForm()">Reset</button>
                            <button type="button" class="btn btn-primary flex">Apply Filters</button>
                        </div>
                    </div>
                </div>
                <!-- End Filter Collapse Content -->

                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Table-->
                    <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th>#</th>
                                <th>Group Name</th>
                                <th>Group Admin</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example loop in Blade syntax -->
                            {{-- @foreach($users as $user) --}}
                            <tr>
                                <td>1</td>
                                <td>{{ "ABC group" }}</td>
                                <td>{{ "admin name" }}</td>
                                <td>{{ "active" }}</td>
                                <td>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.view') }}" class="menu-link px-3">
                                                View
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.edit') }}" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.subscriber') }}" class="menu-link px-3">
                                                Subscribers
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('album-management.index') }}" class="menu-link px-3">
                                                Albums
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>{{ "XYZ group" }}</td>
                                <td>{{ "admin name" }}</td>
                                <td>{{ "active" }}</td>
                                <td>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.view') }}" class="menu-link px-3">
                                                View
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.edit') }}" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.subscriber') }}" class="menu-link px-3">
                                                Subscribers
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('album-management.index') }}" class="menu-link px-3">
                                                Albums
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->



    <!--begin::Modals-->
    @include('pages/apps/group-management/model/confirmDeleteModel')
    <!--end::Modals-->
</x-default-layout>

<script>
    function resetForm() {
        document.getElementById("groupName").value = ""; 
        document.getElementById("groupAdmin").value = ""; 
        document.getElementById("statusSelect").value = "all";
    };
</script>
