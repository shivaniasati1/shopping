<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminblogs()
    {
        return view('admin.blog');
    }
    public function addblogs()
    {
        return view('admin.addblog');
    }
}
