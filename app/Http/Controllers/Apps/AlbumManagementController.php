<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumManagementController extends Controller
{
    public function index()
    {
        return view('pages.apps.album-management.index');
    }

    public function add()
    {
        return view('pages.apps.album-management.add');
    }

    public function edit()
    {
        return view('pages.apps.album-management.edit');
    }
}
