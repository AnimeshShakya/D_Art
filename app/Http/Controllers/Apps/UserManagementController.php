<?php

namespace App\Http\Controllers\Apps;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;


class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(UsersDataTable $dataTable)
    public function index()
    {
        // Pagination 25 is prior 
        $users = User::Paginate(25);


        return view('pages.apps.user-management.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        // return view('pages/apps.user-management.view', compact('user'));
        return view('pages/apps.user-management.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // return view('pages/apps.user-management.view', compact('user'));
        return view('pages/apps.user-management.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages/apps.user-management.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }


    public function viewGroup()
    {
        return view('pages/apps.user-management.viewGroup');
    }
}
