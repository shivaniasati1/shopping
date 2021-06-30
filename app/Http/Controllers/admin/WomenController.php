<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Women;

class WomenController extends Controller
{
    public function __construct(Women $women)
    {
        $this->women = $women;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $data = $this->women->get();
            return view('admin.womens.women', compact('data'));
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
            return view('admin.womens.addwomen');
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
            $data1 = $request->only('composition', 'size', 'color', 'brand');
            // dd($data);
            $request['additional'] = json_encode($data1);

            $imagename = $request->images->getClientOriginalName();
            $request->images->move(public_path('assets/images/shop'), $imagename);
            $request['image'] = $imagename;
            $this->women->create($request->except('_token', 'images', 'composition', 'size', 'color', 'brand'));
            return redirect()->route('women.index');
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
            $women = $this->women->find($id);
            return view('admin.womens.addwomen', compact('women'));
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
                $imagename = $request->images->getClientOriginalName();
                $request->images->move(public_path('assets/images/shop'), $imagename);
                $request['image'] = $imagename;
            }
            $this->women->find($id)->update($request->except("_token", "images", 'composition', 'size', 'color', 'brand'));
            return redirect()->route('women.index');
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
            $this->women->find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
