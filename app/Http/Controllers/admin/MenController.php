<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Men;

class MenController extends Controller
{
    public function __construct(Men $men)
    {
        $this->men = $men;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            // $data = json_decode('additional', true);
            $mens = $this->men->get();
            return view('admin.mens.menproduct', compact('mens'));
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
            return view('admin.mens.addproduct');
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
        $data = $request->only('composition', 'size', 'color', 'brand');
        // dd($data);
        $request['additional'] = json_encode($data);

        $imageName = $request->images->getClientOriginalName();
        $request->images->move(public_path('assets/images/shop'), $imageName);
        $request['image'] = $imageName;
        $this->men->create($request->except("_token", "images", "composition", "size", "color", "brand"));
        return redirect()->route('men.index');
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
            $mens = $this->men->find($id);
            return view('admin.mens.addproduct', compact('mens'));
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
                $request->images->move(public_path('assets/images/shop'), $imageName);
                $request['image'] = $imageName;
            }
            $this->men->find($id)->update($request->except("_token", "images", "composition", "size", "color", "brand"));
            return redirect()->route('men.index');
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
            $this->men->find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
