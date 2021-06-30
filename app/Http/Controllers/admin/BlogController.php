<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $blogs = $this->blog->get();
            return view('admin.blogs.blog', compact('blogs'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('admin.blogs.addblog');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $imageName = $request->images->getClientOriginalName();
            $request->images->move(public_path('assets/images'), $imageName);
            $request['image'] = $imageName;
            $this->blog->create($request->except("_token", "images"));
            return redirect()->route('blog.ind');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $blogs = $this->blog->find($id);
            return view('admin.blogs.addblog', compact('blogs'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if ($request->hasFile('images')) {
                $imageName = $request->images->getClientOriginalName();
                $request->images->move(public_path('assets/images'), $imageName);
                $request['image'] = $imageName;
            }
            $this->blog->find($id)->update($request->except("_token", "images"));
            return redirect()->route('blog.ind');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->blog->find($id)->delete();
            return redirect()->route('blog.ind');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
