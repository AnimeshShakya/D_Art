<x-default-layout>

    @section('title')
        <div class="d-flex justify-content-between align-items-between">
            <h1>User Management</h1>
            <div class="d-flex">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="collapse" data-bs-target="#filterCollapse" title="Filter">
                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                    <!-- Filter -->
                </button>
                <!--end::Filter-->
                <!--begin::Assign Gallery-->
                <a href="{{ route('user-management.add') }}">
                    <button type="button" class="btn btn-primary">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!} Add User
                    </button>
                </a>
                <!--end::Assign Gallery-->
            </div>
        </div>
    @endsection

    @section('breadcrumbs')
        <h2>{{ Breadcrumbs::render('user-management.index') }}</h2>
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
                            <!-- Added border-0 class here -->
                            <h5 class="card-title" id="filterCollapseLabel">Filter Options</h5>
                        </div>
                        <div class="card-body p-0">
                            <!-- Search, Date range filter, and buttons in one row -->  
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Full Name:</div>    
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="name" class="form-control form-control-solid w-250px" id="nameSearchInput" title="Full Name" style="background-color: rgb(245, 245, 245);"/>                    
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Email:</div>
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="email" class="form-control form-control-solid w-250px" id="emailSearchInput" title="Email" style="background-color: rgb(245, 245, 245);"/>                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Address:</div>
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="address" class="form-control form-control-solid w-250px" id="addressSearchInput" title="Address" style="background-color: rgb(245, 245, 245);"/>                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">Phone:</div>
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" data-kt-user-table-filter="phone" class="form-control form-control-solid w-250px" id="phoneSearchInput" title="Phone" style="background-color: rgb(245, 245, 245);"/>                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">User Role:</div>
                                    <br>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <select class="form-select form-select-solid w-250px" name="user_role" id="user_role_select" data-kt-user-table-filter="role" title="User Role" style="background-color: rgb(245, 245, 245);">
                                            <option value="">All</option>
                                            <option value="super_admin">Super Admin</option>
                                            <option value="group_admin">Group Admin</option>
                                            <option value="subscriber">Subscriber</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Buttons -->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary me-3 flex" onclick="resetForm()">Reset</button>
                                        <button type="button" class="btn btn-primary flex">Apply Filters</button>
                                    </div>
                                </div>
                            </div>
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
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>User Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>{{ $data['name'] }}</span>
                                    </div>
                                </td>
                                <td>{{ 'email' }}</td>
                                <td>{{ 'City:' }}<br>{{ 'Province:' }}</td>
                                <td>{{ 'phone' }}</td>
                                <td>{{ 'user role' }}</td>
                                <td>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user-management.view') }}" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user-management.edit') }}" class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#confirmationModal">Delete</a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('group-management.index') }}" class="menu-link px-3">View Groups</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end::Table-->
                    <!-- Display pagination links -->
                    <div class="pagination-wrap">
                        {{ $users->links('vendor.pagination.custom') }}
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
    
    <!--begin::Modals-->
    @include('pages/apps/user-management/model/conformDeleteModel')
    <!--end::Modals-->
</x-default-layout>


<script> 
    function resetForm() {
        document.getElementById("nameSearchInput").value = ""; 
        document.getElementById("emailSearchInput").value = ""; 
        document.getElementById("addressSearchInput").value = "";
        document.getElementById("phoneSearchInput").value = "";
        document.getElementById("user_role_select").value = "";
    };
</script>