<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Men;
use App\Models\Women;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

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
        $mens = Men::all();
        return view('products.men', compact('mens'));
    }

    public function womenshow()
    {
        $womens = Women::all();
        return view('products.women', compact('womens'));
    }

    public function productdetail()
    {
        return view('products.detail');
    }

    public function blogshow()
    {
        $blogs = Blog::all();
        return view('blogs.blogshow', compact('blogs'));
    }

    public function blogdetail()
    {
        $blogs = Blog::get();
        return view('blogs.detail', compact('blogs'));
    }
    // public function addtocart(Request $req)
    // {
    //     if ($req->session()->has('user')) {
    //         $cart = new Cart;
    //         $cart->user_id = $req->session()->get('user')['id'];
    //         $cart->men_id = $req->men_id;
    //         $cart->women_id = $req->women_id;
    //         $cart->save();
    //         return redirect()->back();
    //     } else {
    //         return redirect()->back();
    //     }
    // }
    // static function cartItem()
    // {
    //     $userid = Session::get('user')['id'];
    //     return Cart::where('user_id', $userid)->count();
    // }
}
