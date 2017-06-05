<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function ui()
    {
        return view('admin.ui');
    }
    public function chart()
    {
        return view('admin.chart');
    }
    public function tab()
    {
        return view('admin.tab');
    }
    public function table()
    {
        return view('admin.table');
    }
    public function form()
    {
        return view('admin.form');
    }
}
