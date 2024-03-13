<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupManagementController extends Controller
{
    public function index()
    {
        return view('pages.apps.group-management.index');
    }

    public function view()
    {
        return view('pages.apps.group-management.view');
    }

    public function add()
    {
        return view('pages.apps.group-management.add');
    }

    public function edit()
    {
        return view('pages.apps.group-management.edit');
    }

    public function subscriber()
    {
        return view('pages.apps.group-management.subscriber');
    }

    public function assignSubscriber()
    {
        return view('pages.apps.group-management.assignSubscriber');
    }
}
