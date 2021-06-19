<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function aboutUS()
    {
        return view('pages.about_us');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function productshow()
    {
        return view('products.index');
    }

    public function menshow()
    {
        return view('products.men');
    }

    public function womenshow()
    {
        return view('products.women');
    }

    public function productdetail()
    {
        return view('products.detail');
    }

    public function blogshow()
    {
        return view('blogs.blogshow');
    }

    public function blogdetail()
    {
        return view('blogs.detail');
    }
}
