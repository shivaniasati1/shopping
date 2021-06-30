<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function banner()
    // {
    //     return view('admin.banner.banner');
    // }

    public function index()
    {
        try {
            $banners = $this->banner->get();
            return view('admin.banner.banner', compact('banners'));
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
            return view('admin.banner.addbanner');
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
            $request->images->move(public_path('adminassets/img'), $imageName);
            $request['image'] = $imageName;
            $this->banner->create($request->except("_token", "images"));
            return redirect()->route('banner.index');
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
            $data = Banner::find($id);
            return view('admin.banner.addbanner', compact('data'));
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
            if ($request->hasfile('images')) {
                $imageName = $request->images->getClientOriginalName();

                $request->images->move(public_path('adminassets/img'), $imageName);
                $request['image'] = $imageName;
            }
            $this->banner->find($id)->update($request->except("_token", "images"));
            return redirect()->route('banner.index');
        } catch (\Exception $e) {
            return redirect()->route('banner.index');
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
            $this->banner->find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
