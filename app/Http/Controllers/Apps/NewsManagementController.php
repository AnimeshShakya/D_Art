<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsManagementController extends Controller
{
    public function index()
    {
        return view('pages.apps.news-management.index');
    }

    public function add()
    {
        return view('pages.apps.news-management.add');
    }

    public function view()
    {
        return view('pages.apps.news-management.view');
    }

    public function edit()
    {
        return view('pages.apps.news-management.edit');
    }
}
