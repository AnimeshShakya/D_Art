<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyChangeController extends Controller
{
    public function index()
    {
        return view('pages.apps.currency-change.index');
    }

    public function add()
    {
        return view('pages.apps.currency-change.add');
    }

    public function edit()
    {
        return view('pages.apps.currency-change.edit');
    }
}
