<x-default-layout>

    @section('title')
        Users
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.users.show', $user) }}
    @endsection

    <!-- This is user profile view page -->

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-1">
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Here you would loop through your data to populate the table rows -->
                                <!-- Example loop in Blade syntax -->
                                {{-- @foreach($users as $user) --}}
                                <tr>
                                    <td>1</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ "Chakupat" }}</td>
                                    <td>{{ 987654312 }}</td>
                                    <td>{{ "This is description" }}</td>
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
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
    <!--begin::Modals-->
    <!--begin::Modal - Update user details-->
    @include('pages/apps/user-management/users/modals/_update-details')
    <!--end::Modal - Update user details-->
    <!--begin::Modal - Add schedule-->
    @include('pages/apps/user-management/users/modals/_add-schedule')
    <!--end::Modal - Add schedule-->
    <!--begin::Modal - Add one time password-->
    @include('pages/apps/user-management/users/modals/_add-one-time-password')
    <!--end::Modal - Add one time password-->
    <!--begin::Modal - Update email-->
    @include('pages/apps/user-management/users/modals/_update-email')
    <!--end::Modal - Update email-->
    <!--begin::Modal - Update password-->
    @include('pages/apps/user-management/users/modals/_update-password')
    <!--end::Modal - Update password-->
    <!--begin::Modal - Update role-->
    @include('pages/apps/user-management/users/modals/_update-role')
    <!--end::Modal - Update role-->
    <!--begin::Modal - Add auth app-->
    @include('pages/apps/user-management/users/modals/_add-auth-app')
    <!--end::Modal - Add auth app-->
    <!--begin::Modal - Add task-->
    @include('pages/apps/user-management/users/modals/_add-task')
    <!--end::Modal - Add task-->
    <!--end::Modals-->
</x-default-layout>
