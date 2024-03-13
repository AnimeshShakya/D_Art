<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaManagementController extends Controller
{
    public function index()
    {
        return view('pages.apps.media-management.index');
    }

    public function add()
    {
        return view('pages.apps.media-management.add');
    }

    public function edit()
    {
        return view('pages.apps.media-management.edit');
    }
}
