<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelsController extends Controller
{
    public function index()
    {
        return view('admin.tables');
    }
}
