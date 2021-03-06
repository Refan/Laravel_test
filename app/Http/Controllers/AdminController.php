<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function home()
    {
        return view('admin.home');
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
    public function emptys()
    {
        return view('admin.emptys');
    }

    // public function login()
    // {
    //     return view('admin.login');
    // }
}
