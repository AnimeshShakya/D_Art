<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoxSettingController extends Controller
{
    public function index()
    {
        return view('pages.apps.box-setting.index');
    }

    public function add()
    {
        return view('pages.apps.box-setting.add');
    }

    public function view()
    {
        return view('pages.apps.box-setting.view');
    }

    public function edit()
    {
        return view('pages.apps.box-setting.edit');
    }
}
